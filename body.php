
<div class="container py-5">
	<div class="row">
		<div class="col text-center">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#customizeGlassesModal">
				Customize Glasses 
			</button>
		</div>
	</div>
</div>

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
							<button class="nav-link" id="lens-tab" data-bs-toggle="tab" data-bs-target="#lens" type="button" role="tab" aria-controls="lens" aria-selected="false" disabled><i class="fa fa-check-circle"></i> Lens</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false" disabled><i class="fa fa-check-circle"></i> Review</button>
						</li>
					</ul>
					<div class="tab-content py-4" id="customizeGlassesTabContent">
						<div class="tab-pane fade show active py-4" id="color" role="tabpanel" aria-labelledby="color-tab">
							<div class="text-center">
								<h3 class="text-black mb-4">Select Color</h3>
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
									<button class="btn-go-to btn btn-primary" go-to="vision" disabled>Continue</button>
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
										<input type="radio" id="vision_single_vision_prescription" name="vision" value="single_vision_prescription"/>
										<label for="vision_single_vision_prescription" class="card h-100">
											<!-- <img src="https://cdn.shopify.com/s/files/1/0333/8882/2661/products/LUCIO-AMB-1_df6dc769-3ff9-4dec-8805-80bfbeab8cd8_750x750.png" class="card-img-top" alt="Rain"/> -->
											<div class="card-body text-center">
                        <div>
                          <h5 class="card-title">Single Vision Prescription</h5>
                          <p class="card-text">Send us your prescription</p>                          
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
                          <p class="card-text">Send us your prescription</p>                          
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
                          <h5 class="card-title">Non-Prescription</h5>
                          <p class="card-text">"Just for the look"</p>                          
                        </div>
											</div>
										</label>
									</li>
								</ul>
								<div id="prescription-fields-wrap" class="mb-4" style="display: none;">
									<div class="text-center">
										<h4 class="mb-4">Prescription Options</h4>
										<p>Choose how to provide your prescription</p>
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
                              <div class="form-group">
                                <label for="right_oculus_dexter">Right OD</label>
                                <select id="right_oculus_dexter" name="right_oculus_dexter" class="form-control">
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
                            <div class="col-6">
                              <div class="form-group">
                                <label for="left_oculus_sinister">Left OS</label>
                                <select id="left_oculus_sinister" name="left_oculus_sinister" class="form-control">
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
										<button id="btn-primary-go-to-lens" class="btn-go-to btn btn-primary" go-to="lens" disabled>Continue</button>
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
                <h3 class="mb-4">Select Lens Coating</h3>
              </div>
              <ul id="lens-coating" class="radio-options-wrap row mb-4">
                <li class="col-md-4 mb-3 mb-md-0">
                  <input type="radio" id="lens_coating_clear" name="lens_coating" value="clear"/>
                  <label for="lens_coating_clear" class="card h-100">
                    <div class="card-body text-center">
                      <div>
                        <h5>Clear</h5>
                        <p>Transparent lens for everyday use.</p>
                      </div>
                    </div>
                  </label>
                </li>
                <li class="col-md-4 mb-3 mb-md-0">
                  <input type="radio" id="lens_coating_blue_light" name="lens_coating" value="blue_light"/>
                  <label for="lens_coating_blue_light" class="card h-100">
                    <div class="card-body text-center">
                      <div>
                        <h5>Blue Light Blocking</h5>
                        <p>Protection from digital screens.</p>
                      </div>
                    </div>
                  </label>
                </li>
                <li class="col-md-4 mb-3 mb-md-0">
                  <input type="radio" id="lens_coating_light_adaptive" name="lens_coating" value="light_adaptive"/>
                  <label for="lens_coating_light_adaptive" class="card h-100">
                    <div class="card-body text-center">
                      <div>
                        <h5>Light Adaptive</h5>
                        <p>Indoor and outdoor use that go from clear to dark.</p>
                      </div>
                    </div>
                  </label>
                </li>
              </ul>
							<div class="text-center">
								<h3 class="mb-4">Select Lens Material</h3>
							</div>
							<ul id="lens-options" class="radio-options-wrap row mb-4">
								<li class="col">
									<input type="radio" id="lens_polycarbonate" name="lens" value="polycarbonate"/>
									<label for="lens_polycarbonate" class="card h-100">
										<!-- <img src="https://cdn.shopify.com/s/files/1/0333/8882/2661/products/LUCIO-AMB-1_df6dc769-3ff9-4dec-8805-80bfbeab8cd8_750x750.png" class="card-img-top" alt="Rain"/> -->
										<div class="card-body text-center">
                      <div>
                        <h5 class="card-title">Polycarbonate</h5>
                        <p class="card-text">Polycarbonate lenses are ultra-durable, ultra-lightweight lenses. They are more than 10-times more impact resistant than your average plastic or glass lens. While they're not the thinnest kind of lens out there, they still retain their position as the swiss-army-knife of eyewear lenses.</p>                        
                      </div>
										</div>
									</label>
								</li>
								<li class="col">
									<input type="radio" id="lens_high_index" name="lens" value="high_index"/>
									<label for="lens_high_index" class="card h-100">
										<!-- <img src="https://cdn.shopify.com/s/files/1/0333/8882/2661/products/LUCIO-AMB-1_df6dc769-3ff9-4dec-8805-80bfbeab8cd8_750x750.png" class="card-img-top" alt="Rain"/> -->
										<div class="card-body text-center">
                      <div>
                        <h5 class="card-title">High-Index</h5>
                        <p class="card-text">A high index lens is a lens that has a higher "index" of refraction. This means it has a greater ability to bend light rays to provide clear vision for people with stronger prescription glasses. High index lenses are manufactured to be thinner at the edges of the lens and lighter in weight overall.</p>                        
                      </div>
										</div>
									</label>
								</li>
							</ul>
							<div class="form-check mb-4">
							  <input class="form-check-input" type="checkbox" value="add_blue_light_coating" id="addBluelightCoating"/>
							  <label class="form-check-label" for="addBluelightCoating">
							    Add Bluelight Coating?
							  </label>
							</div>
							<div class="row">
								<!-- <div class="col-6">
									<button class="btn-go-to btn btn-outline-primary" go-to="vision">Previous</button>
								</div> -->
								<div class="col text-center">
									<button class="btn-go-to btn btn-primary" go-to="review" disabled>Continue</button>
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
										<td>Lens</td>
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
