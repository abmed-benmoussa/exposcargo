							<div class="d-flex align-items-center">
								<div class="mr-auto">
									<h3 class="m-subheader__title ">
										Dashboard
									</h3>
								</div>
								<div>
									<span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
										<span class="m-subheader__daterange-label">
											<?php
												$currentWeekNumber = date('W');
												echo 'Week &nbsp;' . $currentWeekNumber; 
												echo '&nbsp; &mdash; '
											?>
											<span class="m-subheader__daterange-title"></span>
											<span class="m-subheader__daterange-date m--font-brand"></span>
										</span>
									</span>
								</div>
							</div>							
