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
  savedOptions: {
    color: null,
    vision: null,
    lens: null,
  },
  onLoad: function() {
    if (!$('#customizeGlassesModal').length) {
      return;
    }
    this.onClickGoTo()
    this.onSelectColor()
    this.initVision()
    this.onSelectLens()
  },
  onClickGoTo: function() {
    $('.btn-go-to').on('click', function() {
      const goto = $(this).attr('go-to')
      if (goto === 'vision') {
        $('#color-tab').addClass('complete')
      } else if (goto === 'lens') {
        /*
        const vision_val = $('#customizeGlassesModal [name="vision"]:checked').val()
        if (vision_val === 'progressive') {
          if ($('#customizeGlassesModal [name="prescription_file"]').val() === '' && $('#customizeGlassesModal [name="prescription_file"]').val() === '') {
            $('#vision .form-group').addClass('is-invalid')
            return false;
          }
        }
        */
        $('#vision-tab').addClass('complete')
      }
      $('#customizeGlassesTab #' + goto + '-tab').tab('show')
      if (goto === 'review') {
        ProductOptions.initReview()
      }
    })
  },
  onSelectColor: function() {
    $('#customizeGlassesModal [name="color"]').on('change', function() {
      $('#vision-tab, [go-to="vision"]').prop('disabled', false).removeAttr('disabled')
      ProductOptions.savedOptions.color = $(this).val()
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
      $('#customizeGlassesTab #lens-tab').tab('show')      
    })
  },
  onSelectVision: function() {
    $('#customizeGlassesModal [name="vision"]').on('change', function() {
      const val = $(this).val()
      if (val === 'single_vision_prescription' || val === 'progressive') {
        $('#customizeGlassesModal #prescription-fields-wrap').slideDown()
      } else {
        $('#customizeGlassesModal #prescription-fields-wrap').slideUp()
        $('#lens-tab, [go-to="lens"]').prop('disabled', false).removeAttr('disabled')
      }
      ProductOptions.savedOptions.vision = $(this).val()
      ProductOptions.isVisionComplete()
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
    // $('#btn-perscription-upload, #btn-perscription-manual').on('click', function() {
    //   alert('TODO: Show Pupillary Distance options!')
    // })
    $('#btn-perscription-upload').on('click', function() {
      $('#perscription-upload-your-rx').slideDown().addClass('active')
      $('#perscription-manual').slideUp().removeClass('active')
      // move Pupillary Distance from Manual to Upload
      if (!$('#perscription-upload-pupillary-distance #single-pupillary-distance').length) {
        const pupillary_distance_html = $('#perscription-manual-pupillary-distance').html()
        $('#perscription-manual-pupillary-distance').empty()
        $('#perscription-upload-pupillary-distance').html(pupillary_distance_html)
        ProductOptions.initPupillaryDistance()
      }
      ProductOptions.isVisionComplete()
    })
    $('#btn-perscription-manually').on('click', function() {
      $('#perscription-upload-your-rx').slideUp().removeClass('active')
      $('#perscription-manual').slideDown().addClass('active')
      // move Pupillary Distance from Upload to Manual
      if (!$('#perscription-manual-pupillary-distance #single-pupillary-distance').length) {
        const pupillary_distance_html = $('#perscription-upload-pupillary-distance').html()
        $('#perscription-upload-pupillary-distance').empty()
        $('#perscription-manual-pupillary-distance').html(pupillary_distance_html)
        ProductOptions.initPupillaryDistance()
      }
      ProductOptions.isVisionComplete()
    })
  },
  onPerscriptionUploadChange: function() {
    $('#prescription_file').on('change', function() {
      ProductOptions.isVisionComplete()
    })
  },
  onPerscriptionManualChange: function() {
    $('#right_oculus_dexter, #left_oculus_sinister').on('change', function() {
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
      $('#lens-tab, [go-to="lens"]').prop('disabled', false).removeAttr('disabled')
    } else {
      $('#lens-tab, [go-to="lens"]').prop('disabled', true)
    }
    return is_complete
  },
  isUploadYourRxComplete: function() {
    const perscription_file_val = $('#prescription_file').val()
    return (perscription_file_val !== '') ? true : false
  },
  isVisionManualComplete: function() {
    const right_oculus_dexter_val = $('#right_oculus_dexter').val()
    const left_oculus_sinister = $('#left_oculus_sinister').val()
    if (right_oculus_dexter_val === '' || left_oculus_sinister === '') {
      return false
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
  onSelectLens: function() {
    $('#customizeGlassesModal [name="lens"]').on('change', function() {
      $('#review-tab, [go-to="review"]').prop('disabled', false).removeAttr('disabled')
      ProductOptions.savedOptions.lens = $(this).val()
      // ProductOptions.updateProgress()
    })
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
    $('#review-color').text( ProductOptions.savedOptions.color.replace('_', ' ') )
    $('#review-vision').text( ProductOptions.savedOptions.vision.replace('_', ' ') )
    $('#review-lens').text( ProductOptions.savedOptions.lens.replace('_', ' ') )
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