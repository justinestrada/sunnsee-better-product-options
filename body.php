
<div class="container py-5">
	<div class="row">
		<div class="col text-center">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#customizeGlassesModal">
				Customize Lenses and Purchase
			</button>
		</div>
	</div>
</div>

<style>
#right-oculus-dextrus {
  padding-left: calc(33.33% + 12px);
  margin-bottom: 1rem;  
}
#left-oculus-sinister {
  padding-right: calc(33.33% + 12px);
  margin-bottom: 1rem;  
}
</style>

<div class="modal fade" id="customizeGlassesModal" tabindex="-1" aria-labelledby="customizeGlassesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="customizeGlassesModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> -->
      <div class="modal-body p-0">
		<div class="container">
			<div class="col">
				<div class="row">
					<ul class="nav nav-tabs" id="customizeGlassesTab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="color-tab" data-bs-toggle="tab" data-bs-target="#color" type="button" role="tab" aria-controls="color" aria-selected="true"><i class="fa fa-check-circle"></i> Color</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="vision-tab" data-bs-toggle="tab" data-bs-target="#vision" type="button" role="tab" aria-controls="vision" aria-selected="false" disabled><i class="fa fa-check-circle"></i> Vision</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="lens-tab" data-bs-toggle="tab" data-bs-target="#lens" type="button" role="tab" aria-controls="lens" aria-selected="false" disabled><i class="fa fa-check-circle"></i> Lenses</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false" disabled><i class="fa fa-check-circle"></i> Review</button>
						</li>
					</ul>
					<div class="tab-content py-4" id="customizeGlassesTabContent">
						<div class="tab-pane fade show active py-4" id="color" role="tabpanel" aria-labelledby="color-tab">
							<div class="text-center">
								<h3 id="select-color-label" class="text-black mb-4">Select Color</h3>
							</div>
							<ul id="color-options" class="radio-options-wrap row mb-4">
								<li class="col-md-4 mb-3 mb-md-0">
									<input type="radio" id="color_rain" name="color" value="rain"/>
									<label for="color_rain" class="card">
										<img src="https://cdn.shopify.com/s/files/1/0333/8882/2661/products/LUCIO-AMB-1_df6dc769-3ff9-4dec-8805-80bfbeab8cd8_750x750.png" class="card-img-top" alt="Rain"/>
										<div class="card-body text-center">
											<h5 class="card-title">Rain</h5>
										</div>
									</label>
								</li>
								<li class="col-md-4 mb-3 mb-md-0">
									<input type="radio" id="color_ocean_seaweed" name="color" value="ocean_seaweed"/>
									<label for="color_ocean_seaweed" class="card">
										<img src="https://cdn.shopify.com/s/files/1/0333/8882/2661/products/LUCIO-OCSW-1_750x750.png" class="card-img-top" alt="Ocean Seaweed"/>
										<div class="card-body text-center">
											<h5 class="card-title">Ocean Seaweed</h5>
										</div>
									</label>
								</li>
								<li class="col-md-4 mb-3 mb-md-0">
									<input type="radio" id="color_onyx" name="color" value="onyx"/>
									<label for="color_onyx" class="card">
										<img src="https://cdn.shopify.com/s/files/1/0333/8882/2661/products/LUCIO-ONX-1_750x750.png" class="card-img-top" alt="Onyx"/>
										<div class="card-body text-center">
											<h5 class="card-title">Onyx</h5>
										</div>
									</label>
								</li>
							</ul>
							<div class="row">
								<div class="col text-center">
									<button class="btn-continue btn-go-to btn btn-primary" go-to="vision" disabled>Continue <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
								</div>
							</div>
						</div>
						<div class="tab-pane fade py-4" id="vision" role="tabpanel" aria-labelledby="vision-tab">
							<div id="vision-content">
								<div class="text-center">
									<h3 class="mb-4">Select Vision Type</h3>										
								</div>
								<ul id="vision-options" class="radio-options-wrap row mb-4">
									<li class="col-md-4 mb-3 mb-md-0">
										<input type="radio" id="vision_single_vision_rx" name="vision" value="single_vision_rx"/>
										<label for="vision_single_vision_rx" class="card h-100">
											<!-- <img src="https://cdn.shopify.com/s/files/1/0333/8882/2661/products/LUCIO-AMB-1_df6dc769-3ff9-4dec-8805-80bfbeab8cd8_750x750.png" class="card-img-top" alt="Rain"/> -->
											<div class="card-body text-center">
                        <div>
                          <h5 class="card-title">Single Vision RX</h5>
                          <p class="card-text">Most common rx lenses and corrects either distance or near / reading vision.</p>                          
                        </div>
											</div>
										</label>
									</li>
									<li class="col-md-4 mb-3 mb-md-0">
										<input type="radio" id="vision_progressive" name="vision" value="progressive"/>
										<label for="vision_progressive" class="card h-100">
											<!-- <img src="https://cdn.shopify.com/s/files/1/0333/8882/2661/products/LUCIO-AMB-1_df6dc769-3ff9-4dec-8805-80bfbeab8cd8_750x750.png" class="card-img-top" alt="Rain"/> -->
											<div class="card-body d-flex align-items-center">
                        <div>
                          <h5 class="card-title">Progressive</h5>
                          <p class="card-text">Advanced digitally surfaced progressive lenses that correct distance, intermediate, and near vision in a gradual, no-line, single lens. Progressive lenses eliminates the need for multiple glasses.</p>                          
                        </div>
											</div>
										</label>
									</li>
									<li class="col-md-4 mb-3 mb-md-0">
										<input type="radio" id="vision_non_prescription" name="vision" value="non_prescription"/>
										<label for="vision_non_prescription" class="card h-100">
											<!-- <img src="https://cdn.shopify.com/s/files/1/0333/8882/2661/products/LUCIO-AMB-1_df6dc769-3ff9-4dec-8805-80bfbeab8cd8_750x750.png" class="card-img-top" alt="Rain"/> -->
											<div class="card-body d-flex align-items-center">
                        <div>
                          <h5 class="card-title">Non-RX</h5>
                          <p class="card-text">Get the look and eye-protection without vision correction.</p>                          
                        </div>
											</div>
										</label>
									</li>
								</ul>
								<div id="prescription-fields-wrap" class="mb-4" style="display: none;">
									<div class="text-center">
										<h4 class="mb-4">Select Prescription Type</h4>
										<!-- <p>Choose how to provide your prescription</p> -->
									</div>
									<div class="row">
										<div class="col text-center">
											<div class="mb-3">
												<button type="button" id="btn-perscription-upload" class="btn btn-outline-primary">Upload Your Rx</button>
											</div>
											<div id="perscription-upload-your-rx" class="perscription-outer" style="display: none;">
												<div class="perscription-inner">
													<div class="form-group mb-3">
														<label for="prescription_file" class="form-label">Upload prescription file</label>
														<input type="file" id="prescription_file" name="prescription_file" class="form-control" accept="image/png, image/jpeg, application/pdf"/>
														<small  class="d-block">We'll update your order after we verify the Rx.</small>
													</div>
                          <div id="perscription-upload-pupillary-distance">
                            <div id="single-pupillary-distance" class="active form-group mb-3">
                              <label for="pupillary_distance">
                                Pupillary Distance
                                <button type="button" id="show-single-pupillary-distance-info" class="btn btn-tooltip">?</button>
                              </label>
                              <select id="pupillary_distance" name="pupillary_distance" class="form-control">
                                <option value="">--</option>
                                <option value="40.0">40.0</option>
                                <option value="40.5">40.5</option>
                                <option value="41.0">41.0</option>
                                <option value="41.5">41.5</option>
                                <option value="42.0">42.0</option>
                                <option value="42.5">42.5</option>
                                <option value="43.0">43.0</option>
                                <option value="43.5">43.5</option>
                                <option value="44.0">44.0</option>
                                <option value="44.5">44.5</option>
                                <option value="45.0">45.0</option>
                                <option value="45.5">45.5</option>
                                <option value="46.0">46.0</option>
                                <option value="46.5">46.5</option>
                                <option value="47.0">47.0</option>
                                <option value="47.5">47.5</option>
                                <option value="48.0">48.0</option>
                                <option value="48.5">48.5</option>
                                <option value="49.0">49.0</option>
                                <option value="49.5">49.5</option>
                                <option value="50.0">50.0</option>
                                <option value="50.5">50.5</option>
                                <option value="51.0">51.0</option>
                                <option value="51.5">51.5</option>
                                <option value="52.0">52.0</option>
                                <option value="52.5">52.5</option>
                                <option value="53.0">53.0</option>
                                <option value="53.5">53.5</option>
                                <option value="54.0">54.0</option>
                                <option value="54.5">54.5</option>
                                <option value="55.0">55.0</option>
                                <option value="55.5">55.5</option>
                                <option value="56.0">56.0</option>
                                <option value="56.5">56.5</option>
                                <option value="57.0">57.0</option>
                                <option value="57.5">57.5</option>
                                <option value="58.0">58.0</option>
                                <option value="58.5">58.5</option>
                                <option value="59.0">59.0</option>
                                <option value="59.5">59.5</option>
                                <option value="60.0">60.0</option>
                                <option value="60.5">60.5</option>
                                <option value="61.0">61.0</option>
                                <option value="61.5">61.5</option>
                                <option value="62.0">62.0</option>
                                <option value="62.5">62.5</option>
                                <option value="63.0">63.0</option>
                                <option value="63.5">63.5</option>
                                <option value="64.0">64.0</option>
                                <option value="64.5">64.5</option>
                                <option value="65.0">65.0</option>
                                <option value="65.5">65.5</option>
                                <option value="66.0">66.0</option>
                                <option value="66.5">66.5</option>
                                <option value="67.0">67.0</option>
                                <option value="67.5">67.5</option>
                                <option value="68.0">68.0</option>
                                <option value="68.5">68.5</option>
                                <option value="69.0">69.0</option>
                                <option value="69.5">69.5</option>
                                <option value="70.0">70.0</option>
                                <option value="70.5">70.5</option>
                                <option value="71.0">71.0</option>
                                <option value="71.5">71.5</option>
                                <option value="72.0">72.0</option>
                                <option value="72.5">72.5</option>
                                <option value="73.0">73.0</option>
                                <option value="73.5">73.5</option>
                                <option value="74.0">74.0</option>
                                <option value="74.5">74.5</option>
                                <option value="75.0">75.0</option>
                                <option value="75.5">75.5</option>
                                <option value="76.0">76.0</option>
                              </select>
                            </div>
                            <div id="multiple-pupillary-distances" class="mb-3">
                              <div class="row">
                                <div>
                                  Pupillary Distance
                                  <button type="button" id="show-multiple-pupillary-distance-info" class="btn btn-tooltip">?</button>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-6">
                                  <div class="form-group">
                                    <label for="right_pupillary_distance">Right PD</label>
                                    <select id="right_pupillary_distance" name="right_pupillary_distance" class="form-control">
                                      <option value="">--</option>
                                      <option value="20.0">20.0</option>
                                      <option value="20.5">20.5</option>
                                      <option value="21.0">21.0</option>
                                      <option value="21.5">21.5</option>
                                      <option value="22.0">22.0</option>
                                      <option value="22.5">22.5</option>
                                      <option value="23.0">23.0</option>
                                      <option value="23.5">23.5</option>
                                      <option value="24.0">24.0</option>
                                      <option value="24.5">24.5</option>
                                      <option value="25.0">25.0</option>
                                      <option value="25.5">25.5</option>
                                      <option value="26.0">26.0</option>
                                      <option value="26.5">26.5</option>
                                      <option value="27.0">27.0</option>
                                      <option value="27.5">27.5</option>
                                      <option value="28.0">28.0</option>
                                      <option value="28.5">28.5</option>
                                      <option value="29.0">29.0</option>
                                      <option value="29.5">29.5</option>
                                      <option value="30.0">30.0</option>
                                      <option value="30.5">30.5</option>
                                      <option value="31.0">31.0</option>
                                      <option value="31.5">31.5</option>
                                      <option value="32.0">32.0</option>
                                      <option value="32.5">32.5</option>
                                      <option value="33.0">33.0</option>
                                      <option value="33.5">33.5</option>
                                      <option value="34.0">34.0</option>
                                      <option value="34.5">34.5</option>
                                      <option value="35.0">35.0</option>
                                      <option value="35.5">35.5</option>
                                      <option value="36.0">36.0</option>
                                      <option value="36.5">36.5</option>
                                      <option value="37.0">37.0</option>
                                      <option value="37.5">37.5</option>
                                      <option value="38.0">38.0</option>
                                    </select>                               
                                  </div>
                                </div>
                                <div class="col-6">
                                  <div class="form-group">
                                    <label for="left_pupillary_distance">Left PD</label>
                                    <select id="left_pupillary_distance" name="left_pupillary_distance" class="form-control">
                                      <option value="">--</option>
                                      <option value="20.0">20.0</option>
                                      <option value="20.5">20.5</option>
                                      <option value="21.0">21.0</option>
                                      <option value="21.5">21.5</option>
                                      <option value="22.0">22.0</option>
                                      <option value="22.5">22.5</option>
                                      <option value="23.0">23.0</option>
                                      <option value="23.5">23.5</option>
                                      <option value="24.0">24.0</option>
                                      <option value="24.5">24.5</option>
                                      <option value="25.0">25.0</option>
                                      <option value="25.5">25.5</option>
                                      <option value="26.0">26.0</option>
                                      <option value="26.5">26.5</option>
                                      <option value="27.0">27.0</option>
                                      <option value="27.5">27.5</option>
                                      <option value="28.0">28.0</option>
                                      <option value="28.5">28.5</option>
                                      <option value="29.0">29.0</option>
                                      <option value="29.5">29.5</option>
                                      <option value="30.0">30.0</option>
                                      <option value="30.5">30.5</option>
                                      <option value="31.0">31.0</option>
                                      <option value="31.5">31.5</option>
                                      <option value="32.0">32.0</option>
                                      <option value="32.5">32.5</option>
                                      <option value="33.0">33.0</option>
                                      <option value="33.5">33.5</option>
                                      <option value="34.0">34.0</option>
                                      <option value="34.5">34.5</option>
                                      <option value="35.0">35.0</option>
                                      <option value="35.5">35.5</option>
                                      <option value="36.0">36.0</option>
                                      <option value="36.5">36.5</option>
                                      <option value="37.0">37.0</option>
                                      <option value="37.5">37.5</option>
                                      <option value="38.0">38.0</option>
                                    </select>                               
                                  </div>                            
                                </div>                              
                              </div>
                            </div>
                            <div class="text-center">
                              <a href="https://www.sunnsee.com/pages/pupillary-distance" target="_blank" class="d-block text-black">How do I mesure my Pupillary Distance?</a>
                              <a href="javascript:void(0);" class="multiple-pupillary-distances-link d-block text-black">I have more than one Pupillary Distance.</a>
                              <a href="javascript:void(0);" class="single-pupillary-distance-link text-black" style="display: none;">I have only one Pupillary Distance.</a>
                            </div>                            
                          </div>
												</div>
											</div>
											<div class="hr-line mb-3">
												<span>or</span>
											</div>
											<button type="button" id="btn-perscription-manually" class="btn btn-outline-primary mb-3">Enter Manually</button>
                      <div id="perscription-manual" class="perscription-outer" style="display: none;">
                        <div class="perscription-inner">
                          <div class="row mb-3">
                            <div class="col-6">
                              <div id="right-oculus-dextrus">
                                Right Oculus Dextrus (OD)
                              </div>
                              <div class="form-group mb-3">
                                <div class="row">
                                  <div class="col-4">
                                    <label for="right_od_sph">
                                      SPH <button type="button" class="btn btn-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="SPH or Sphere Power is the measurement of correction required for near-sightedness or far-sightedness expressed in diopters.">?</button>
                                    </label>
                                  </div>
                                  <div class="col-8">
                                    <select id="right_od_sph" name="right_od_sph" class="form-control">
                                      <option value="-10.00">-10.00</option>
                                      <option value="-9.75">-9.75</option>
                                      <option value="-9.50">-9.50</option>
                                      <option value="-9.25">-9.25</option>
                                      <option value="-9.00">-9.00</option>
                                      <option value="-8.75">-8.75</option>
                                      <option value="-8.50">-8.50</option>
                                      <option value="-8.25">-8.25</option>
                                      <option value="-8.00">-8.00</option>
                                      <option value="-7.75">-7.75</option>
                                      <option value="-7.50">-7.50</option>
                                      <option value="-7.25">-7.25</option>
                                      <option value="-7.00">-7.00</option>
                                      <option value="-6.75">-6.75</option>
                                      <option value="-6.50">-6.50</option>
                                      <option value="-6.25">-6.25</option>
                                      <option value="-6.00">-6.00</option>
                                      <option value="-5.75">-5.75</option>
                                      <option value="-5.50">-5.50</option>
                                      <option value="-5.25">-5.25</option>
                                      <option value="-5.00">-5.00</option>
                                      <option value="-4.75">-4.75</option>
                                      <option value="-4.50">-4.50</option>
                                      <option value="-4.25">-4.25</option>
                                      <option value="-4.00">-4.00</option>
                                      <option value="-3.75">-3.75</option>
                                      <option value="-3.50">-3.50</option>
                                      <option value="-3.25">-3.25</option>
                                      <option value="-3.00">-3.00</option>
                                      <option value="-2.75">-2.75</option>
                                      <option value="-2.50">-2.50</option>
                                      <option value="-2.25">-2.25</option>
                                      <option value="-2.00">-2.00</option>
                                      <option value="-1.75">-1.75</option>
                                      <option value="-1.50">-1.50</option>
                                      <option value="-1.25">-1.25</option>
                                      <option value="-1.00">-1.00</option>
                                      <option value="-0.75">-0.75</option>
                                      <option value="-0.50">-0.50</option>
                                      <option value="-0.25">-0.25</option>
                                      <option value="0.00">0.00</option>
                                      <option value="" selected="">--</option>
                                      <option value="0.00">PL</option>
                                      <option value="0.00">Plano</option>
                                      <option value="+0.25">+0.25</option>
                                      <option value="+0.50">+0.50</option>
                                      <option value="+0.75">+0.75</option>
                                      <option value="+1.00">+1.00</option>
                                      <option value="+1.25">+1.25</option>
                                      <option value="+1.50">+1.50</option>
                                      <option value="+1.75">+1.75</option>
                                      <option value="+2.00">+2.00</option>
                                      <option value="+2.25">+2.25</option>
                                      <option value="+2.50">+2.50</option>
                                      <option value="+2.75">+2.75</option>
                                      <option value="+3.00">+3.00</option>
                                      <option value="+3.25">+3.25</option>
                                      <option value="+3.50">+3.50</option>
                                      <option value="+3.75">+3.75</option>
                                      <option value="+4.00">+4.00</option>
                                      <option value="+4.25">+4.25</option>
                                      <option value="+4.50">+4.50</option>
                                      <option value="+4.75">+4.75</option>
                                      <option value="+5.00">+5.00</option>
                                      <option value="+5.25">+5.25</option>
                                      <option value="+5.50">+5.50</option>
                                      <option value="+5.75">+5.75</option>
                                      <option value="+6.00">+6.00</option>
                                      <option value="+6.25">+6.25</option>
                                      <option value="+6.50">+6.50</option>
                                      <option value="+6.75">+6.75</option>
                                      <option value="+7.00">+7.00</option>
                                      <option value="+7.25">+7.25</option>
                                      <option value="+7.50">+7.50</option>
                                      <option value="+7.75">+7.75</option>
                                      <option value="+8.00">+8.00</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group mb-3">
                                <div class="row">
                                  <div class="col-4">
                                    <label for="right_od_cyl">
                                      CYL <button type="button" class="btn btn-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="CYL or Cylinder is the measurement used to correct for astigmatism, which is a fancy word to describe an eye that is not perfectly round.  ">?</button>
                                    </label>
                                  </div>
                                  <div class="col-8">
                                    <select name="right_od_cyl" id="right_od_cyl" class="form-control">
<option value="" selected="">--</option><option value="none">None</option><option value="-4.00">-4.00</option><option value="-3.75">-3.75</option><option value="-3.50">-3.50</option><option value="-3.25">-3.25</option><option value="-3.00">-3.00</option><option value="-2.75">-2.75</option><option value="-2.50">-2.50</option><option value="-2.25">-2.25</option><option value="-2.00">-2.00</option><option value="-1.75">-1.75</option><option value="-1.50">-1.50</option><option value="-1.25">-1.25</option><option value="-1.00">-1.00</option><option value="-0.75">-0.75</option><option value="-0.50">-0.50</option><option value="-0.25">-0.25</option><option value="+0.25">+0.25</option><option value="+0.50">+0.50</option><option value="+0.75">+0.75</option><option value="+1.00">+1.00</option><option value="+1.25">+1.25</option><option value="+1.50">+1.50</option><option value="+1.75">+1.75</option><option value="+2.00">+2.00</option><option value="+2.25">+2.25</option><option value="+2.50">+2.50</option><option value="+2.75">+2.75</option><option value="+3.00">+3.00</option><option value="+3.25">+3.25</option><option value="+3.50">+3.50</option><option value="+3.75">+3.75</option><option value="+4.00">+4.00</option>                                      
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group mb-3">
                                <div class="row">
                                  <div class="col-4">
                                    <label for="right_od_axis">
                                      AXIS <button type="button" class="btn btn-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Axis defines the angle for the CYL correction. It is the number that is written next to the CYL value on your prescription and is expressed in degrees. If your prescription doesn't specify a CYL or Axis, you can leave these values blank.">?</button>
                                    </label>
                                  </div>
                                  <div class="col-8">
                                    <select id="right_od_axis" name="right_od_axis" class="form-control">
<option value="" selected="">--</option><option value="none">None</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option><option value="61">61</option><option value="62">62</option><option value="63">63</option><option value="64">64</option><option value="65">65</option><option value="66">66</option><option value="67">67</option><option value="68">68</option><option value="69">69</option><option value="70">70</option><option value="71">71</option><option value="72">72</option><option value="73">73</option><option value="74">74</option><option value="75">75</option><option value="76">76</option><option value="77">77</option><option value="78">78</option><option value="79">79</option><option value="80">80</option><option value="81">81</option><option value="82">82</option><option value="83">83</option><option value="84">84</option><option value="85">85</option><option value="86">86</option><option value="87">87</option><option value="88">88</option><option value="89">89</option><option value="90">90</option><option value="91">91</option><option value="92">92</option><option value="93">93</option><option value="94">94</option><option value="95">95</option><option value="96">96</option><option value="97">97</option><option value="98">98</option><option value="99">99</option><option value="100">100</option><option value="101">101</option><option value="102">102</option><option value="103">103</option><option value="104">104</option><option value="105">105</option><option value="106">106</option><option value="107">107</option><option value="108">108</option><option value="109">109</option><option value="110">110</option><option value="111">111</option><option value="112">112</option><option value="113">113</option><option value="114">114</option><option value="115">115</option><option value="116">116</option><option value="117">117</option><option value="118">118</option><option value="119">119</option><option value="120">120</option><option value="121">121</option><option value="122">122</option><option value="123">123</option><option value="124">124</option><option value="125">125</option><option value="126">126</option><option value="127">127</option><option value="128">128</option><option value="129">129</option><option value="130">130</option><option value="131">131</option><option value="132">132</option><option value="133">133</option><option value="134">134</option><option value="135">135</option><option value="136">136</option><option value="137">137</option><option value="138">138</option><option value="139">139</option><option value="140">140</option><option value="141">141</option><option value="142">142</option><option value="143">143</option><option value="144">144</option><option value="145">145</option><option value="146">146</option><option value="147">147</option><option value="148">148</option><option value="149">149</option><option value="150">150</option><option value="151">151</option><option value="152">152</option><option value="153">153</option><option value="154">154</option><option value="155">155</option><option value="156">156</option><option value="157">157</option><option value="158">158</option><option value="159">159</option><option value="160">160</option><option value="161">161</option><option value="162">162</option><option value="163">163</option><option value="164">164</option><option value="165">165</option><option value="166">166</option><option value="167">167</option><option value="168">168</option><option value="169">169</option><option value="170">170</option><option value="171">171</option><option value="172">172</option><option value="173">173</option><option value="174">174</option><option value="175">175</option><option value="176">176</option><option value="177">177</option><option value="178">178</option><option value="179">179</option><option value="180">180</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group_right-od-add form-group">
                                <div class="row">
                                  <div class="col-4">
                                    <label for="right_od_add">
                                      ADD <button type="button" class="btn btn-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Required for bifocals, this value denotes how much power is added for near viewing. If you are ordering reading glasses, sometimes the ADD power is already included in the SPH power. If there is no ADD power written on your prescription, select the 'Single Vision Distance' option above.">?</button>
                                    </label>
                                  </div>
                                  <div class="col-8">
                                    <select id="right_od_add" name="right_od_add" class="form-control">
                                      <option value="" selected="">--</option>
                                      <option value="+0.50">+0.50</option>
                                      <option value="+0.75">+0.75</option>
                                      <option value="+1.00">+1.00</option>
                                      <option value="+1.25">+1.25</option>
                                      <option value="+1.50">+1.50</option>
                                      <option value="+1.75">+1.75</option>
                                      <option value="+2.00">+2.00</option>
                                      <option value="+2.25">+2.25</option>
                                      <option value="+2.50">+2.50</option>
                                      <option value="+2.75">+2.75</option>
                                      <option value="+3.00">+3.00</option>
                                      <option value="+3.25">+3.25</option>
                                      <option value="+3.50">+3.50</option>
                                      <option value="+3.75">+3.75</option>
                                      <option value="+4.00">+4.00</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-6">
                              <div id="left-oculus-sinister">Left Oculus Sinister (OS)</div>
                              <div class="form-group mb-3">
                                <div class="row">
                                  <div class="col-4">
                                    <label for="left_os_sph">
                                      SPH <button type="button" class="btn btn-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="SPH or Sphere Power is the measurement of correction required for near-sightedness or far-sightedness expressed in diopters.">?</button>
                                    </label>                                    
                                  </div>
                                  <div class="col-8">
                                    <select id="left_os_sph" name="left_os_sph" class="form-control">
                                      <option value="-10.00">-10.00</option>
                                      <option value="-9.75">-9.75</option>
                                      <option value="-9.50">-9.50</option>
                                      <option value="-9.25">-9.25</option>
                                      <option value="-9.00">-9.00</option>
                                      <option value="-8.75">-8.75</option>
                                      <option value="-8.50">-8.50</option>
                                      <option value="-8.25">-8.25</option>
                                      <option value="-8.00">-8.00</option>
                                      <option value="-7.75">-7.75</option>
                                      <option value="-7.50">-7.50</option>
                                      <option value="-7.25">-7.25</option>
                                      <option value="-7.00">-7.00</option>
                                      <option value="-6.75">-6.75</option>
                                      <option value="-6.50">-6.50</option>
                                      <option value="-6.25">-6.25</option>
                                      <option value="-6.00">-6.00</option>
                                      <option value="-5.75">-5.75</option>
                                      <option value="-5.50">-5.50</option>
                                      <option value="-5.25">-5.25</option>
                                      <option value="-5.00">-5.00</option>
                                      <option value="-4.75">-4.75</option>
                                      <option value="-4.50">-4.50</option>
                                      <option value="-4.25">-4.25</option>
                                      <option value="-4.00">-4.00</option>
                                      <option value="-3.75">-3.75</option>
                                      <option value="-3.50">-3.50</option>
                                      <option value="-3.25">-3.25</option>
                                      <option value="-3.00">-3.00</option>
                                      <option value="-2.75">-2.75</option>
                                      <option value="-2.50">-2.50</option>
                                      <option value="-2.25">-2.25</option>
                                      <option value="-2.00">-2.00</option>
                                      <option value="-1.75">-1.75</option>
                                      <option value="-1.50">-1.50</option>
                                      <option value="-1.25">-1.25</option>
                                      <option value="-1.00">-1.00</option>
                                      <option value="-0.75">-0.75</option>
                                      <option value="-0.50">-0.50</option>
                                      <option value="-0.25">-0.25</option>
                                      <option value="0.00">0.00</option>
                                      <option value="" selected="">--</option>
                                      <option value="0.00">PL</option>
                                      <option value="0.00">Plano</option>
                                      <option value="+0.25">+0.25</option>
                                      <option value="+0.50">+0.50</option>
                                      <option value="+0.75">+0.75</option>
                                      <option value="+1.00">+1.00</option>
                                      <option value="+1.25">+1.25</option>
                                      <option value="+1.50">+1.50</option>
                                      <option value="+1.75">+1.75</option>
                                      <option value="+2.00">+2.00</option>
                                      <option value="+2.25">+2.25</option>
                                      <option value="+2.50">+2.50</option>
                                      <option value="+2.75">+2.75</option>
                                      <option value="+3.00">+3.00</option>
                                      <option value="+3.25">+3.25</option>
                                      <option value="+3.50">+3.50</option>
                                      <option value="+3.75">+3.75</option>
                                      <option value="+4.00">+4.00</option>
                                      <option value="+4.25">+4.25</option>
                                      <option value="+4.50">+4.50</option>
                                      <option value="+4.75">+4.75</option>
                                      <option value="+5.00">+5.00</option>
                                      <option value="+5.25">+5.25</option>
                                      <option value="+5.50">+5.50</option>
                                      <option value="+5.75">+5.75</option>
                                      <option value="+6.00">+6.00</option>
                                      <option value="+6.25">+6.25</option>
                                      <option value="+6.50">+6.50</option>
                                      <option value="+6.75">+6.75</option>
                                      <option value="+7.00">+7.00</option>
                                      <option value="+7.25">+7.25</option>
                                      <option value="+7.50">+7.50</option>
                                      <option value="+7.75">+7.75</option>
                                      <option value="+8.00">+8.00</option>
                                    </select>                                    
                                  </div>
                                </div>                     
                              </div>
                              <div class="form-group mb-3">
                                <div class="row">
                                  <div class="col-4">
                                    <label for="left_os_cyl">
                                      CYL <button type="button" class="btn btn-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="CYL or Cylinder is the measurement used to correct for astigmatism, which is a fancy word to describe an eye that is not perfectly round.  ">?</button>
                                    </label>
                                  </div>
                                  <div class="col-8">
                                    <select name="left_os_cyl" id="left_os_cyl" class="form-control">
<option value="" selected="">--</option><option value="">None</option><option value="-4.00">-4.00</option><option value="-3.75">-3.75</option><option value="-3.50">-3.50</option><option value="-3.25">-3.25</option><option value="-3.00">-3.00</option><option value="-2.75">-2.75</option><option value="-2.50">-2.50</option><option value="-2.25">-2.25</option><option value="-2.00">-2.00</option><option value="-1.75">-1.75</option><option value="-1.50">-1.50</option><option value="-1.25">-1.25</option><option value="-1.00">-1.00</option><option value="-0.75">-0.75</option><option value="-0.50">-0.50</option><option value="-0.25">-0.25</option><option value="+0.25">+0.25</option><option value="+0.50">+0.50</option><option value="+0.75">+0.75</option><option value="+1.00">+1.00</option><option value="+1.25">+1.25</option><option value="+1.50">+1.50</option><option value="+1.75">+1.75</option><option value="+2.00">+2.00</option><option value="+2.25">+2.25</option><option value="+2.50">+2.50</option><option value="+2.75">+2.75</option><option value="+3.00">+3.00</option><option value="+3.25">+3.25</option><option value="+3.50">+3.50</option><option value="+3.75">+3.75</option><option value="+4.00">+4.00</option>                                      
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group mb-3">
                                <div class="row">
                                  <div class="col-4">
                                    <label for="left_os_axis">
                                      AXIS <button type="button" class="btn btn-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Axis defines the angle for the CYL correction. It is the number that is written next to the CYL value on your prescription and is expressed in degrees. If your prescription doesn't specify a CYL or Axis, you can leave these values blank.">?</button>
                                    </label>
                                  </div>
                                  <div class="col-8">
                                    <select id="left_os_axis" name="left_os_axis" class="form-control">
<option value="" selected="">--</option><option value="">None</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option><option value="61">61</option><option value="62">62</option><option value="63">63</option><option value="64">64</option><option value="65">65</option><option value="66">66</option><option value="67">67</option><option value="68">68</option><option value="69">69</option><option value="70">70</option><option value="71">71</option><option value="72">72</option><option value="73">73</option><option value="74">74</option><option value="75">75</option><option value="76">76</option><option value="77">77</option><option value="78">78</option><option value="79">79</option><option value="80">80</option><option value="81">81</option><option value="82">82</option><option value="83">83</option><option value="84">84</option><option value="85">85</option><option value="86">86</option><option value="87">87</option><option value="88">88</option><option value="89">89</option><option value="90">90</option><option value="91">91</option><option value="92">92</option><option value="93">93</option><option value="94">94</option><option value="95">95</option><option value="96">96</option><option value="97">97</option><option value="98">98</option><option value="99">99</option><option value="100">100</option><option value="101">101</option><option value="102">102</option><option value="103">103</option><option value="104">104</option><option value="105">105</option><option value="106">106</option><option value="107">107</option><option value="108">108</option><option value="109">109</option><option value="110">110</option><option value="111">111</option><option value="112">112</option><option value="113">113</option><option value="114">114</option><option value="115">115</option><option value="116">116</option><option value="117">117</option><option value="118">118</option><option value="119">119</option><option value="120">120</option><option value="121">121</option><option value="122">122</option><option value="123">123</option><option value="124">124</option><option value="125">125</option><option value="126">126</option><option value="127">127</option><option value="128">128</option><option value="129">129</option><option value="130">130</option><option value="131">131</option><option value="132">132</option><option value="133">133</option><option value="134">134</option><option value="135">135</option><option value="136">136</option><option value="137">137</option><option value="138">138</option><option value="139">139</option><option value="140">140</option><option value="141">141</option><option value="142">142</option><option value="143">143</option><option value="144">144</option><option value="145">145</option><option value="146">146</option><option value="147">147</option><option value="148">148</option><option value="149">149</option><option value="150">150</option><option value="151">151</option><option value="152">152</option><option value="153">153</option><option value="154">154</option><option value="155">155</option><option value="156">156</option><option value="157">157</option><option value="158">158</option><option value="159">159</option><option value="160">160</option><option value="161">161</option><option value="162">162</option><option value="163">163</option><option value="164">164</option><option value="165">165</option><option value="166">166</option><option value="167">167</option><option value="168">168</option><option value="169">169</option><option value="170">170</option><option value="171">171</option><option value="172">172</option><option value="173">173</option><option value="174">174</option><option value="175">175</option><option value="176">176</option><option value="177">177</option><option value="178">178</option><option value="179">179</option><option value="180">180</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group_left-os-add form-group">
                                <div class="row">
                                  <div class="col-4">
                                    <label for="left_os_add">
                                      ADD <button type="button" class="btn btn-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Required for bifocals, this value denotes how much power is added for near viewing. If you are ordering reading glasses, sometimes the ADD power is already included in the SPH power. If there is no ADD power written on your prescription, select the 'Single Vision Distance' option above.">?</button>
                                    </label>                                    
                                  </div>
                                  <div class="col-8">
                                    <select id="left_os_add" name="left_os_add" class="form-control">
                                      <option value="" selected="">--</option>
                                      <option value="+0.50">+0.50</option>
                                      <option value="+0.75">+0.75</option>
                                      <option value="+1.00">+1.00</option>
                                      <option value="+1.25">+1.25</option>
                                      <option value="+1.50">+1.50</option>
                                      <option value="+1.75">+1.75</option>
                                      <option value="+2.00">+2.00</option>
                                      <option value="+2.25">+2.25</option>
                                      <option value="+2.50">+2.50</option>
                                      <option value="+2.75">+2.75</option>
                                      <option value="+3.00">+3.00</option>
                                      <option value="+3.25">+3.25</option>
                                      <option value="+3.50">+3.50</option>
                                      <option value="+3.75">+3.75</option>
                                      <option value="+4.00">+4.00</option>
                                    </select>                                    
                                  </div>
                                </div>                     
                              </div>
                            </div>
                          </div>
                          <div id="perscription-manual-pupillary-distance"></div>
                        </div>
                      </div>
											<p style="margin: 0;">Don't know it? We can <a href="javascript:void(0);" go-to="lens" class="link-skip-vision-step text-black">skip this step</a> and add it later.</p>
										</div>
									</div>
								</div>
								<div class="row">
									<!-- <div class="col-6">
										<button class="btn-go-to btn btn-outline-primary" go-to="color">Previous</button>
									</div> -->
									<div class="col text-center">
										<button id="btn-primary-go-to-lens" class="btn-continue btn-go-to btn btn-primary" go-to="lens" disabled>Continue <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
									</div>
								</div>										
							</div>
							<div id="single-pupillary-distance-info" class="pupillary-distance-info py-4">
								<button class="btn btn-close hide-pupillary-distance-info"></button>
								<h3 class="text-ce">What is Pupillary Distance?</h3>
								<img src="https://cdn.shopify.com/s/files/1/0333/8882/2661/files/pupillary-distance.jpg?v=1631004770/" alt="Single Pupillary Distance Infographic"/>
								<p>Pupillary Distance (PD) is the distance between your left and right pupil, expressed in mm. This value normally ranges from 54mm to 68mm for most adults and between 42mm and 54mm for children. If your prescription has a different PD measurement for each eye, click "I have more than one PD" to enter in both values. Click here to measure your PD using our tool.</p>
							</div>
							<div id="multiple-pupillary-distance-info" class="pupillary-distance-info py-4">
								<button class="btn btn-close hide-pupillary-distance-info"></button>
								<h3 class="text-ce">Two Pupillary Distance Numbers?</h3>
								<img src="https://cdn.shopify.com/s/files/1/0333/8882/2661/files/pd.jpg?v=1631004789" alt="Single Pupillary Distance Infographic"/>
								<p>If your Pupillary Distance consists of two numbers, it is measured as the distance between the centers of each pupil to the bridge of the nose. Dual Pupillary distances are usually written in this format: #/#. The first number is the right eye, and second number refers to the left eye. Both numbers should be less than 40. If your prescription has a different PD measurement for each eye, click "I have more than one PD" to enter in both values. Click here to measure your PD using our tool.</p>
							</div>
						</div>
						<div class="tab-pane fade py-4" id="lens" role="tabpanel" aria-labelledby="vision-tab">
              <div class="text-center">
                <h3 class="mb-4">Select Lens Material</h3>
              </div>
              <ul id="lens-options" class="radio-options-wrap row mb-4">
                <li class="col">
                  <input type="radio" id="lens_polycarbonate" name="lens_material" value="polycarbonate"/>
                  <label for="lens_polycarbonate" class="card h-100">
                    <!-- <img src="https://cdn.shopify.com/s/files/1/0333/8882/2661/products/LUCIO-AMB-1_df6dc769-3ff9-4dec-8805-80bfbeab8cd8_750x750.png" class="card-img-top" alt="Rain"/> -->
                    <div class="card-body text-center">
                      <div>
                        <h5 class="card-title">Polycarbonate</h5>
                        <div class="card-text">
                          <p>Included</p>
                          <p class="mb-0">SunNSee Premium impact-resistance 1.59 lenses included free.</p>
                        </p>                        
                      </div>
                    </div>
                  </label>
                </li>
                <li class="col">
                  <input type="radio" id="lens_high_index" name="lens_material" value="high_index"/>
                  <label for="lens_high_index" class="card h-100">
                    <!-- <img src="https://cdn.shopify.com/s/files/1/0333/8882/2661/products/LUCIO-AMB-1_df6dc769-3ff9-4dec-8805-80bfbeab8cd8_750x750.png" class="card-img-top" alt="Rain"/> -->
                    <div class="card-body text-center">
                      <div>
                        <h5 class="card-title">High-Index</h5>
                        <div class="card-text">
                          <p>$25.00</p>
                          <p>Ultra-light and thin lenses recommended for prescription stronger than +/-2.50</p>
                          <p id="high-index-recommended" class="mb-0" style="display: none;">
                            <small>*Based on your prescription, we recommend High-Index Lenses</small>
                          </p>
                        </div>
                      </div>
                    </div>
                  </label>
                </li>
              </ul> 
              <div class="text-center">
                <h3 class="mb-4">Select Lens Coating</h3>
              </div>
              <ul id="lens-coating" class="checkbox-options-wrap row mb-4">
                <li class="col-md-4 mb-3 mb-md-0">
                  <input type="checkbox" id="lens_coating_premium" name="lens_coating" value="clear"/>
                  <label for="lens_coating_premium" class="card h-100">
                    <div class="card-body text-center">
                      <div>
                        <h5>Premium</h5>
                        <p class="mb-0">Anti-Reflective (AR), super hydrophobic, oleophobic, and scratch resistance. Included free of charge.</p>
                      </div>
                    </div>
                  </label>
                </li>
                <li class="col-md-4 mb-3 mb-md-0">
                  <input type="checkbox" id="lens_coating_blue_filter" name="lens_coating" value="blue_filter"/>
                  <label for="lens_coating_blue_filter" class="card h-100">
                    <div class="card-body text-center">
                      <div>
                        <h5>Blue Filter</h5>
                        <p>$15</p>
                        <p class="mb-0">Protects your eyes from harmful artificial blue light and reduces digital eye-strain. Recommended for long-screen time users.</p>
                      </div>
                    </div>
                  </label>
                </li>
                <li class="col-md-4 mb-3 mb-md-0">
                  <input type="checkbox" id="lens_coating_transitions" name="lens_coating" value="light_adaptive"/>
                  <label for="lens_coating_transitions" class="card h-100">
                    <div class="card-body text-center">
                      <div>
                        <h5>Transitions<sup>&reg;</sup></h5>
                        <p>$95</p>
                        <p class="mb-0">Automatically adapt to light changing environments. Quickly adapt from clear indoor lenses to dark outdoor lenses in seconds.</p>
                      </div>
                    </div>
                  </label>
                </li>
              </ul>
              <div id="select-transitions-color" class="mb-4" style="display: none;">
                <div class="text-center">
                  <h3 class="mb-4">Select Transition Color</h3>                  
                </div>
                <ul id="transition-color" class="radio-options-wrap row">
                  <li class="col-md-4 mb-3 mb-md-0">
                    <input type="radio" id="transition_color_grey" name="transition_color" value="grey"/>
                    <label for="transition_color_grey" class="card h-100">
                      <div class="card-body text-center">
                        <div>
                          <div class="circle circle-grey mx-auto mb-1"></div>
                          <h6>Grey</h6>
                        </div>
                      </div>
                    </label>
                  </li>
                  <li class="col-md-4 mb-3 mb-md-0">
                    <input type="radio" id="transition_color_sapphire" name="transition_color" value="sapphire"/>
                    <label for="transition_color_sapphire" class="card h-100">
                      <div class="card-body text-center">
                        <div>
                          <div class="circle circle-sapphire mx-auto mb-1"></div>
                          <h6>Sapphire</h6>
                        </div>
                      </div>
                    </label>
                  </li>
                  <li class="col-md-4 mb-3 mb-md-0">
                    <input type="radio" id="transition_color_amethyst" name="transition_color" value="amethyst"/>
                    <label for="transition_color_amethyst" class="card h-100">
                      <div class="card-body text-center">
                        <div>
                          <div class="circle circle-amethyst mx-auto mb-1"></div>
                          <h6>Amethyst</h6>
                        </div>
                      </div>
                    </label>
                  </li>
                </ul>
              </div>
							<div class="row">
								<!-- <div class="col-6">
									<button class="btn-go-to btn btn-outline-primary" go-to="vision">Previous</button>
								</div> -->
								<div class="col text-center">
									<button class="btn-continue btn-go-to btn btn-primary" go-to="review" disabled>Continue <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
								</div>
							</div>
						</div>
						<div class="tab-pane fade py-4" id="review" role="tabpanel" aria-labelledby="review-tab">
							<div class="text-center">
								<h3 class="mb-4">Review Customized Glasses</h3>										
							</div>
							<table id="review-table" class="table-responsive table mb-4">
								<tbody>
									<tr>
										<td>Color</td>
										<td id="review-color" class="review-value">{color}</td>
									</tr>
									<tr>
										<td>Vision</td>
										<td id="review-vision" class="review-value">{vision}</td>
									</tr>
									<tr>
										<td>Lenses</td>
										<td id="review-lens" class="review-value">{lens}</td>
									</tr>
								</tbody>
							</table>
							<div class="row">
								<!-- <div class="col-6">
									<button class="btn-go-to btn btn-outline-primary" go-to="lens">Previous</button>
								</div> -->
								<div class="col text-center">
									<a href="/checkout" class="btn btn-primary">Add To Cart</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> 
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
