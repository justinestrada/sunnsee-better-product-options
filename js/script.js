(function($) {
const Cookie = {
  read: function(name) {
    var nameEQ = name + '=';
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
      var c = ca[i];
      while (c.charAt(0)==' ') c = c.substring(1,c.length);
      if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
  },
  create: function(name, value, days) {
    let expires = '';
    if (days) {
      var date = new Date();
      date.setTime(date.getTime()+(days*24*60*60*1000));
      expires = '; expires='+date.toGMTString();
    } else {
      expires = '';
    }
    document.cookie = name + '=' + value + expires + '; path=/';
  },
  erase: function(name) {
    Cookie.create(name, '', -1);
  },
};

const ProductOptions = {
  // savedOptions: {
  //   color: null,
  //   vision: null,
  //   lens: null,
  // },
  onLoad: function() {
    if (!$('#customizeGlassesModal').length) {
      return;
    }
    this.onClickGoTo()
    this.onSelectColor()
    this.initVision()
    this.initLenses()
  },
  onClickGoTo: function() {
    $('.btn-go-to').on('click', function() {
      let goto = $(this).attr('go-to')
      if (goto === 'vision') {
        $('#color-tab').addClass('complete')
      } else if (goto === 'lenses') {
        $('#vision-tab').addClass('complete')
      } else if (goto === 'review-skip-lenses' || goto === 'review') {
        if (goto === 'review-skip-lenses') {
          $('#vision-tab').addClass('complete')
          goto = 'review'
        } else {
          $('#lenses-tab').addClass('complete')
        }
        ProductOptions.initReview()
      }
      $('#customizeGlassesTab #' + goto + '-tab').tab('show')
    })
  },
  onSelectColor: function() {
    $('#customizeGlassesModal [name="color"]').on('change', function() {
      $('#vision-tab, [go-to="vision"]').prop('disabled', false).removeAttr('disabled')
      // ProductOptions.savedOptions.color = $(this).val()
      // ProductOptions.updateProgress()
    })
  },
  initVision: function() {
    this.onSelectVision()
    this.onPrescriptionChange()
    this.onPerscriptionOptionsBtnClick()
    this.onPerscriptionUploadChange()
    this.onPerscriptionManualChange()
    this.initPupillaryDistance()
    $('.link-skip-vision-step').on('click', function() {
      $('#vision-tab').addClass('complete')
      $('#lenses-tab, [go-to="lenses"]').prop('disabled', false).removeAttr('disabled')
      $('#customizeGlassesTab #lenses-tab').tab('show')
    })
  },
  onSelectVision: function() {
    const self = this
    $('#customizeGlassesModal [name="vision"]').on('change', function() {
      const val = $(this).val()
      if (val === 'single_vision_rx' || val === 'progressive') {
        $('#customizeGlassesModal #prescription-fields-wrap').slideDown()
      } else {
        $('#customizeGlassesModal #prescription-fields-wrap').slideUp()
        $('#lenses-tab, [go-to="lenses"]').prop('disabled', false).removeAttr('disabled')
      }
      // self.savedOptions.vision_type = $(this).val()
      self.isVisionComplete()
      self.togglePerscriptionManualOculus()
      // ProductOptions.updateProgress()
    })
  },
  onPrescriptionChange: function() {
    $('#prescription-fields-wrap input').on('change', function() {
      if ($(this).val() !== '') {
        $(this).removeClass('is-invalid')
      }
    });
  },
  onPerscriptionOptionsBtnClick: function() {
    const self = this
    $('#btn-perscription-upload').on('click', function() {
      $('#perscription-upload-your-rx').slideDown().addClass('active')
      $('#perscription-manual').slideUp().removeClass('active')
      // move Pupillary Distance from Manual to Upload
      if (!$('#perscription-upload-pupillary-distance #single-pupillary-distance').length) {
        const pupillary_distance_html = $('#perscription-manual-pupillary-distance').html()
        $('#perscription-manual-pupillary-distance').empty()
        $('#perscription-upload-pupillary-distance').html(pupillary_distance_html)
        self.initPupillaryDistance()
      }
      self.isVisionComplete()
    })
    $('#btn-perscription-manually').on('click', function() {
      $('#perscription-upload-your-rx').slideUp().removeClass('active')
      $('#perscription-manual').slideDown().addClass('active')
      // move Pupillary Distance from Upload to Manual
      if (!$('#perscription-manual-pupillary-distance #single-pupillary-distance').length) {
        const pupillary_distance_html = $('#perscription-upload-pupillary-distance').html()
        $('#perscription-upload-pupillary-distance').empty()
        $('#perscription-manual-pupillary-distance').html(pupillary_distance_html)
        self.initPupillaryDistance()
      }
      self.togglePerscriptionManualOculus()
      self.isVisionComplete()
    })
  },
  togglePerscriptionManualOculus: function() {
    const selected_vision = $('#customizeGlassesModal [name="vision"]:checked').val()
    if (selected_vision === 'single_vision_rx') {
      $('.form-group_right-od-add, .form-group_left-os-add').hide()
      $('.form-group_right-od-add, .form-group_left-os-add').prop('required', false).removeAttr('required')
    } else if (selected_vision === 'progressive') {
      $('.form-group_right-od-add, .form-group_left-os-add').show()
      $('.form-group_right-od-add, .form-group_left-os-add').prop('required', true)
    }
  },
  onPerscriptionUploadChange: function() {
    $('#prescription_file').on('change', function() {
      ProductOptions.isVisionComplete()
    })
  },
  onPerscriptionManualChange: function() {
    $('#right_od_sph, #left_os_sph, #right_od_cyl, #left_os_cyl, #right_od_axis, #left_os_axis, #right_od_add, #left_os_add').on('change', function() {
      // 
      // if SPH or CYL is greater than 2.5
      const right_od_sph = parseFloat($('#right_od_sph').val().replace('+', ''))
      const left_os_sph = parseFloat($('#left_os_sph').val().replace('+', ''))
      const right_od_cyl = parseFloat($('#right_od_cyl').val().replace('+', ''))
      const left_os_cyl = parseFloat($('#left_os_cyl').val().replace('+', ''))
      // TODO: confirm with Abel that it's greater than or equal to 2.5
      if (right_od_sph >= 2.5 || left_os_sph >= 2.5 || right_od_cyl >= 2.5 || left_os_cyl >= 2.5) {
        $('#high-index-recommended').show()
      } else {
        $('#high-index-recommended').hide()        
      }
      ProductOptions.isVisionComplete()
    })
  },
  isVisionComplete: function() {
    let is_complete = false
    const vision_value = $('#customizeGlassesModal [name="vision"]:checked').val()
    if (vision_value === 'non_prescription') {
      is_complete = true
    } else {
      if ($('#perscription-upload-your-rx').hasClass('active')) {
        if (this.isUploadYourRxComplete() && this.isPupillaryDistanceComplete()) {
          is_complete = true
        }
      } else if ($('#perscription-manual').hasClass('active')) {
        if (this.isVisionManualComplete() && this.isPupillaryDistanceComplete()) {
          is_complete = true
        }
      }
    }
    if (is_complete) {
      if (vision_value === 'non_prescription') {
        $('#lenses-tab').prop('disabled', true)
        $('#vision-content #btn-primary-go-to-lenses').attr('go-to', 'review-skip-lenses')
      } else {
        $('#lenses-tab').prop('disabled', false).removeAttr('disabled')
        $('#vision-content #btn-primary-go-to-lenses').attr('go-to', 'lenses')
      }
      $('[go-to="lenses"]').prop('disabled', false).removeAttr('disabled')
    } else {
      $('#lenses-tab').show()
      $('#vision-content #btn-primary-go-to-lenses').attr('go-to', 'lenses')
      $('#lenses-tab, [go-to="lenses"]').prop('disabled', true)
    }
    return is_complete
  },
  isUploadYourRxComplete: function() {
    const perscription_file_val = $('#prescription_file').val()
    return (perscription_file_val !== '') ? true : false
  },
  isVisionManualComplete: function() {
    const right_od_sph = $('#right_od_sph').val()
    const left_os_sph = $('#left_os_sph').val()
    const right_od_cyl = $('#right_od_cyl').val()
    const left_os_cyl = $('#left_os_cyl').val()
    const right_od_axis = $('#right_od_axis').val()
    const left_os_axis = $('#left_os_axis').val()
    const selected_vision = $('#customizeGlassesModal [name="vision"]:checked').val()
    if (selected_vision === 'single_vision_rx') {
      if (right_od_sph === '' || left_os_sph === '' || right_od_cyl === '' || left_os_cyl === '' || right_od_axis === '' || left_os_axis === '') {
        return false
      }
    } else if (selected_vision === 'progressive') {
      const right_od_add = $('#right_od_add').val()
      const left_os_add = $('#left_os_add').val()
      if (right_od_sph === '' || left_os_sph === '' || right_od_cyl === '' || left_os_cyl === '' || right_od_axis === '' || left_os_axis === '' || right_od_add === '' || left_os_add === '') {
        return false
      }      
    }
    return true
  },
  isPupillaryDistanceComplete: function() {
    let is_complete = false
    if ($('#single-pupillary-distance').hasClass('active')) {
      const pupillary_distance = $('#pupillary_distance').val()
      is_complete = (pupillary_distance !== '') ? true : false
    } else if ($('#multiple-pupillary-distances').hasClass('active')) {
      const right_pupillary_distance = $('#right_pupillary_distance').val()
      const left_pupillary_distance = $('#left_pupillary_distance').val()
      is_complete = (right_pupillary_distance !== '' && left_pupillary_distance) ? true : false      
    }
    return is_complete
  },
  initPupillaryDistance: function() {
    $('.multiple-pupillary-distances-link').on('click', function() {
      $('#multiple-pupillary-distances').show().addClass('active')
      $('#single-pupillary-distance').hide().removeClass('active')
      $('.single-pupillary-distance-link').show()
      $(this).removeClass('d-block').addClass('d-none')
    })
    $('.single-pupillary-distance-link').on('click', function() {
      $('#single-pupillary-distance').show().addClass('active')
      $('.single-pupillary-distance-link').show()
      $('#multiple-pupillary-distances').hide().removeClass('active')
      $('.multiple-pupillary-distances-link').removeClass('d-none').addClass('d-block')
      $(this).hide()
    })
    this.onTogglePupillaryDistanceInfo()

    $('#pupillary_distance, #right_pupillary_distance, #left_pupillary_distance').on('change', function() {
      ProductOptions.isVisionComplete()
    })
  },
  onTogglePupillaryDistanceInfo: function() {
    $('#show-single-pupillary-distance-info').on('click', function() {
      $('#single-pupillary-distance-info').show()
      $('#vision-content').hide()
    })
    $('#show-multiple-pupillary-distance-info').on('click', function() {
      $('#multiple-pupillary-distance-info').show()
      $('#vision-content').hide()
    })
    $('.hide-pupillary-distance-info').on('click', function() {
      $('.pupillary-distance-info').hide()
      $('#vision-content').show()
    })
  },
  initLenses: function() {
    this.onSelectLensMaterial()
    this.onSelectLensCoating()
  },
  onSelectLensMaterial: function() {
    const self = this
    $('#customizeGlassesModal [name="lens_material"]').on('change', function() {
      self.isLensesComplete()
      $('#select-lens-coating').slideDown()
    })
  },
  onSelectLensCoating: function() {
    $('#customizeGlassesModal [name="lens_coating"]').on('change', function() {
      let selected_lens_coatings = [];
      $('[name="lens_coating"]:checked').each(function() {
        selected_lens_coatings.push($(this).val());
      });
      if (selected_lens_coatings.includes('transitions')) {
        $('#select-transitions-color').show()        
      } else {
        $('#select-transitions-color').hide()
      }
    })
  },
  isLensesComplete: function() {
    const selected_lens_material = $('#customizeGlassesModal [name="lens_material"]:checked').val()
    const selected_lens_coating = $('#customizeGlassesModal [name="lens_coating"]:checked').val()
    if (selected_lens_material !== undefined && selected_lens_coating !== undefined) {
      $('#review-tab, [go-to="review"]').prop('disabled', false).removeAttr('disabled')
    } else {
      $('#review-tab, [go-to="review"]').prop('disabled', true)
    }
  },
  /*
  updateProgress: function( step, step_value ) {
    const saved_progress = Cookie.read('PRODUCT_OPTIONS_PROGRESS');
    if (saved_progress) {
      console.log('saved_progress', saved_progress)
      if (step !== 'vision') {
        saved_progress.vision = step_value;
      }
    } else {
      const value = JSON.stringify({
        step: step_value
      })
      Cookie.create('PRODUCT_OPTIONS_PROGRESS', value, 7)
    }
  },
  */
  initReview: function() {
    this.createReviewSummary()
    this.onClickRemove()
  },
  createReviewSummary: function() {
    // Color
    const selected_color_label = $('[name="color"]:checked').next().find('.card-title').text()
    $('#review-color').html( selected_color_label )
    // Vision
    const selected_vision_type_label = $('[name="vision"]:checked').next().find('.card-title').text()
    $('#review-vision-type').html( selected_vision_type_label )
    // Color Price
    const selected_color_price = (selected_vision_type_label !== 'Non-Rx') ? $('[name="color"]:checked').next().find('.card-price').text() : '$45'
    $('#review-color_price').html( selected_color_price )
    // Prescription Type
    if ($('[name="vision"]:checked').val() !== 'non_prescription') {
      let review_prescription_type_html = '<div>'
        if ($('#perscription-upload-your-rx').hasClass('active')) {
          const prescription_file = $('#prescription_file').val()
          review_prescription_type_html += prescription_file
        } else if ($('#perscription-manual').hasClass('active')) {
          review_prescription_type_html += this.getReviewPerscriptionTypeManualHTML()
        }
        // TODO: Get Pupillary Distance
      review_prescription_type_html += '</div>'
      $('#review-prescription-type_value').html( review_prescription_type_html )
      $('#review-prescription-type').show()
    } else {
      $('#review-prescription-type_value').empty()
      $('#review-prescription-type').hide()
    }
    // Lens Material
    const selected_lens_material_label = $('[name="lens_material"]:checked').next().find('.card-title').text()
    $('#review-lens-material_value').html(selected_lens_material_label)
    if (selected_lens_material_label === 'High-Index') {
      $('#review-lens-material_price').text('$40')
    }
    // Lens Coating
    let review_lens_coating_html = review_lens_coating_price = review_lens_coating_remove = ''
    const coating_count = $('[name="lens_coating"]:checked').lenght
    $('[name="lens_coating"]:checked').each(function() { 
      const val = $(this).val()
      review_lens_coating_html += '<div class="review-lens-coating_' + val + '">'
      review_lens_coating_price += '<div class="review-lens-coating_' + val + '">'
      review_lens_coating_remove += '<div class="review-lens-coating_' + val + '">'
        review_lens_coating_html += $(this).next().find('.card-title').text()
        if (val === 'blue_filter' || val === 'transitions') {
          review_lens_coating_price += $(this).next().find('.card-price').text()
          review_lens_coating_remove += '\
            <button class="review-remove" value="lens_coating_' + val + '">\
              <i class="review-remove-icon fa fa-times-circle" aria-hidden="true" value="review-lens-coating_' + val + '"></i><span class="sr-only">Remove</span>\
            </button>'
        } else {
          review_lens_coating_price += '<span style="visibility: hidden;">Included</span>'
          review_lens_coating_remove += '<span style="visibility: hidden;">Included</span>'
        }
      review_lens_coating_html += '</div>'
      review_lens_coating_price += '</div>'
      review_lens_coating_remove += '</div>'
    })
    $('#review-lens-coating_value').html(review_lens_coating_html)
    $('#review-lens-coating_price').html(review_lens_coating_price)
    $('#review-lens-coating_remove').html(review_lens_coating_remove)
  },
  getReviewPerscriptionTypeManualHTML: function() {
    const right_od_sph = $('#right_od_sph').val()
    const left_os_sph = $('#left_os_sph').val()
    const right_od_cyl = $('#right_od_cyl').val()
    const left_os_cyl = $('#left_os_cyl').val()
    const right_od_axis = $('#right_od_axis').val()
    const left_os_axis = $('#left_os_axis').val()
    // const right_od_add = $('#right_od_add').val() // TODO
    // const left_os_add = $('#left_os_add').val() // TODO
    const html = '\
      <div class="row">\
        <div class="col-6">Right Oculus<br/>Dextrus (OD)</div>\
        <div class="col-6">Left Oculus<br/>Sinister (OS)</div>\
      </div>\
      <div class="row">\
        <div class="col-6">SPH ' + right_od_sph + '</div>\
        <div class="col-6">SPH ' + left_os_sph + '</div>\
      </div>\
      <div class="row">\
        <div class="col-6">CYL ' + right_od_cyl + '</div>\
        <div class="col-6">CYL ' + left_os_cyl + '</div>\
      </div>\
      <div class="row">\
        <div class="col-6">AXIS ' + right_od_axis + '</div>\
        <div class="col-6">AXIS ' + left_os_axis + '</div>\
      </div>'
    return html
  },
  onClickRemove: function() {
    if ($('.review-remove-td').hasClass('loaded')) {
      return
    }
    $('.review-remove-td').on('click', function() {
      const $target = $(event.target)
      if ($target.attr('class').includes('review-remove')) {
        const value = $target.attr('value')
        if (value && value !== '') {
          $('.' + value).remove()
          if (value.includes('lens-coating')) {
            const unselect_lens_coating_value = value.replace('review-lens-coating_', '')
            $('[name="lens_coating"][value="' + unselect_lens_coating_value + '"]').prop('checked', false).removeAttr('checked')
          }
        }
        // TODO: re-calculate review total        
      }
    })
    $('.review-remove-td').addClass('loaded')
  },
}

$(document).ready(function() {
  ProductOptions.onLoad()
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })
});
})(jQuery);