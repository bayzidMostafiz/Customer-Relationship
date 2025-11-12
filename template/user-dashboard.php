<?php @include "inc/header.php";?>
	<!-- /Header -->

    <!-- Breadcrumb -->
	<div class="breadcrumb-bar text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-12">
					<h2 class="breadcrumb-title mb-2">Dashboard</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-center mb-0">
							<li class="breadcrumb-item"><a href="index.html"><i class="ti ti-home-2"></i></a></li>
                            <li class="breadcrumb-item">Customer</li>
							<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
						</ol>
					</nav>
				</div>
			</div>
			<div class="breadcrumb-bg">
				<img src="assets/img/bg/breadcrumb-bg-01.png" class="breadcrumb-bg-1" alt="Img">
				<img src="assets/img/bg/breadcrumb-bg-02.png" class="breadcrumb-bg-2" alt="Img">
			</div>
		</div>
	</div>
	<!-- /Breadcrumb -->

    <!-- Page Wrapper -->
     <div class="page-wrapper">
        <div class="content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 theiaStickySidebar">
						<div class="card user-sidebar mb-4 mb-lg-0">
                            <div class="card-header user-sidebar-header mb-4">
                                <div class="d-flex justify-content-center align-items-center flex-column">
                                    <span class="user rounded-circle avatar avatar-xxl mb-2">
                                        <img src="assets/img/profiles/avatar-21.jpg" class="img-fluid rounded-circle" alt="Img">
                                    </span>
                                    <h6 class="mb-2">John Smith</h6>
                                    <p class="fs-14">Member Since Sep 2021</p>
                                </div>
                            </div>
							<div class="card-body user-sidebar-body p-0">
								<ul>
                                    <li class="mb-4">
                                        <a href="user-dashboard.php" class="d-flex align-items-center">
                                            <i class="ti ti-layout-grid me-2"></i>
                                            Dashboard
                                        </a>
                                    </li>
                                    <!-- <li class="mb-4">
                                        <a href="user-booking-list.html" class="d-flex align-items-center">
                                            <i class="ti ti-device-mobile me-2"></i>
                                            Bookings
                                        </a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="favourites.html" class="d-flex align-items-center">
                                            <i class="ti ti-heart me-2"></i>
                                            Favorites
                                        </a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="customer-wallet.html" class="d-flex align-items-center">
                                            <i class="ti ti-wallet me-2"></i>
                                            Wallet
                                        </a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="customer-reviews.html" class="d-flex align-items-center">
                                            <i class="ti ti-star me-2"></i>
                                            Reviews
                                        </a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="user-chat.html" class="d-flex align-items-center">
                                            <i class="ti ti-message-circle me-2"></i>
                                            Chat
                                        </a>
                                    </li> -->
                                    <li class="mb-4">
										<a href="account-settings.php" class="d-block mb-3"><i class="ti ti-settings me-2"></i><span>Settings</span><span class="menu-arrow"></span></a>
										<!-- <ul class="ms-4">
											<li class="mb-3">
												<a href="account-settings.html" class="fs-14 d-inline-flex align-items-center active"><i class="ti ti-chevrons-right me-2"></i>Account Settings</a>
											</li>
											<li class="mb-3">
												<a href="security-settings.html" class="fs-14 d-inline-flex align-items-center"><i class="ti ti-chevrons-right me-2"></i>Security Settings</a>
											</li>
											<li class="mb-3"> 
												<a href="notification-settings.html" class="fs-14 d-inline-flex align-items-center"><i class="ti ti-chevrons-right me-2"></i>Notifications</a>
											</li>
											<li class="mb-3">
												<a href="connected-apps.html" class="fs-14 d-inline-flex align-items-center"><i class="ti ti-chevrons-right me-2"></i>Connected Apps</a>
											</li>
											<li class="mb-3">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#del-account" class="fs-14"><i class="ti ti-chevrons-right me-2"></i>Delete Account</a>
											</li>
										</ul> -->
									</li>
                                    <li class="mb-0">
                                        <a href="login.html" class="d-flex align-items-center">
                                            <i class="ti ti-logout me-2"></i>
                                            Logout
                                        </a>
                                    </li>
                                </ul>
							</div>
						</div>
					</div>
                    <div class="col-xl-9 col-lg-8">
                        <h4 class="mb-3">Dashboard</h4>
                        <div class="row mb-4">
							<!-- col-xxl-3 col-md-6 -->
                            <div class="">
                                <div class="card dash-widget">
                                    <div class="card-body">
                                        <div class="d-flex  justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <span class="dash-icon bg-primary-transparent d-flex justify-content-center align-items-center rounded-circle">
                                                    <i class="ti ti-shopping-cart"></i>
                                                </span>
                                                <div class="ms-2">
                                                    <span class="fs-14">Total Orders</span>
                                                    <h5><span class="counter">27</span></h5>
                                                </div>
                                            </div>
                                            <!-- <span class="badge badge-success"><i class="ti ti-circle-arrow-up me-1"></i>16%</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-md-6 d-none">
                                <div class="card dash-widget">
                                    <div class="card-body">
                                        <div class="d-flex  justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <span class="dash-icon bg-secondary-transparent d-flex justify-content-center align-items-center rounded-circle">
                                                    <i class="ti ti-wallet"></i>
                                                </span>
                                                <div class="ms-2">
													<span class="fs-14">Total Spend</span>
                                                    <h5>$ <span class="counter">2500</span></h5>
                                                </div>
                                            </div>
                                            <span class="badge badge-danger"><i class="ti ti-circle-arrow-down me-1"></i>5%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-md-6 d-none">
                                <div class="card dash-widget">
                                    <div class="card-body">
                                        <div class="d-flex  justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <span class="dash-icon bg-success-transparent d-flex justify-content-center align-items-center rounded-circle ">
                                                    <i class="ti ti-cards"></i>
                                                </span>
                                                <div class="ms-2">
													<span class="fs-14">Wallet</span>
                                                    <h5>$ <span class="counter">200</span></h5>
                                                </div>
                                            </div>
                                            <span class="badge badge-danger"><i class="ti ti-circle-arrow-down me-1"></i>5%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-md-6 d-none">
                                <div class="card dash-widget">
                                    <div class="card-body">
                                        <div class="d-flex  justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <span class="dash-icon bg-info-transparent d-flex justify-content-center align-items-center rounded-circle">
                                                    <i class="ti ti-cards"></i>
                                                </span>
                                                <div class="ms-2">
													<span class="fs-14">Total Savings</span>
                                                    <h5>$ <span class="counter">354</span></h5>
                                                </div>
                                            </div>
                                            <span class="badge badge-success"><i class="ti ti-circle-arrow-up me-1"></i>16%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
							
                            <div class="col-xxl-5 col-lg-5 d-none ">
								<div class="w-100">
									<h5 class="mb-3">Recent Transaction</h5>
									<div class="table-responsive">
										<table class="table mb-0">
											<tbody>
												<tr>
													<td>
														<div class="d-flex align-items-center">
															<span class="dash-icon-1 bg-gray d-flex justify-content-center align-items-center rounded-circle avatar avatar-lg me-2">
																<i class="ti ti-devices-2 fs-20 text-dark"></i>
															</span>
															<div>
																<h6 class="fs-14">Service Booking</h6>
																<span class="text-gray fs-12">
																	<i class="feather-calendar"></i>
																	22 Sep 2023 
																	<span class="ms-2">
																		<i class="feather-clock"></i> 
																		10:12 AM
																	</span>
																</span>
															</div>
														</div>
													</td>
													<td class="text-end">
														<h6>$280.00</h6>
													</td>
												</tr>
												<tr>
													<td>
														<div class="d-flex align-items-center">
															<span class="dash-icon-1 bg-gray d-flex justify-content-center align-items-center rounded-circle avatar avatar-lg me-2">
																<i class="ti ti-refresh fs-20 text-dark"></i>
															</span>
															<div>
																<h6 class="fs-14">Service Refund</h6>
																<span class="text-gray fs-12">
																	<i class="feather-calendar"></i>
																	15 Oct 2022 
																	<span class="ms-2">
																		<i class="ti ti-clock me-1"></i>
																		   14:36 PM
																	</span>
																</span>
															</div>
														</div>
													</td>
													<td class="text-end">
														<h6>$395.00</h6>
													</td>
												</tr>
												<tr>
													<td>
														<div class="d-flex align-items-center">
															<span class="dash-icon-1 bg-gray d-flex justify-content-center align-items-center rounded-circle avatar avatar-lg me-2">
																<i class="ti ti-wallet fs-20 text-dark"></i>
															</span>
															<div>
																<h6 class="fs-14">Wallet Topup</h6>
																<span class="text-gray fs-12">
																	<i class="feather-calendar"></i>
																	18 Oct 2022 
																	<span class="ms-2">
																		<i class="ti ti-clock me-1"></i>
																		15:19 PM
																	</span>
																</span>
															</div>
														</div>
													</td>
													<td class="text-end">
														<h6>$1000.00</h6>
													</td>
												</tr>
												<tr>
													<td>
														<div class="d-flex align-items-center">
															<span class="dash-icon-1 bg-gray d-flex justify-content-center align-items-center rounded-circle avatar avatar-lg me-2">
																<i class="ti ti-devices-2 fs-20 text-dark"></i>
															</span>
															<div>
																<h6 class="fs-14">Service Booking</h6>
																<span class="text-gray fs-12">
																	<i class="feather-calendar"></i>
																	28 Oct 2022
																	<span class="ms-2">
																		<i class="ti ti-clock me-1"></i>
																		11:17 AM
																	</span>
																</span>
															</div>
														</div>
													</td>
													<td class="text-end">
														<h6>$598.65</h6>
													</td>
												</tr>
												<tr>
													<td>
														<div class="d-flex align-items-center">
															<span class="dash-icon-1 bg-gray d-flex justify-content-center align-items-center rounded-circle avatar avatar-lg me-2">
																<i class="ti ti-devices-2 fs-20 text-dark"></i>
															</span>
															<div>
																<h6 class="fs-14">Service Booking</h6>
																<span class="text-gray fs-12">
																	<i class="feather-calendar"></i>
																	10 Nov 2022
																	<span class="ms-2">
																		<i class="ti ti-clock me-1"></i>
																		09:13 AM
																	</span>
																</span>
															</div>
														</div>
													</td>
													<td class="text-end">
														<h6>$300.00</h6>
													</td>
												</tr>
												<tr>
													<td>
														<div class="d-flex align-items-center">
															<span class="dash-icon-1 bg-gray d-flex justify-content-center align-items-center rounded-circle avatar avatar-lg me-2">
																<i class="ti ti-devices-2 fs-20 text-dark"></i>
															</span>
															<div>
																<h6 class="fs-14">Service Booking</h6>
																<span class="text-gray fs-12">
																	<i class="feather-calendar"></i>
																	10 Nov 2022
																	<span class="ms-2">
																		<i class="ti ti-clock me-1"></i>
																		09:13 AM
																	</span>
																</span>
															</div>
														</div>
													</td>
													<td class="text-end">
														<h6>$300.00</h6>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
                            </div>
							<!-- col-xxl-7 col-lg-7 -->
							<div class=" d-flex">
								<div class="w-100">
									<h5 class="mb-3">Recent Booking</h5>
									<div class="table-responsive">
										<table class="table mb-0">
											<tbody>
												<tr>
													<td>
														<a href="booking-details.html" class="d-flex">
															<span class="avatar avatar-lg me-2">
																<img src="assets/img/providers/provider-15.jpg" class="img-fluid" alt="img">
															</span>
															<div class="d-flex align-items-center">
																<div>
																	<h6 class="fs-14">Computer Repair</h6>
																	<span class="text-gray fs-12">
																		<i class="feather-calendar me-1"></i>
																			10 Nov 2022
																	</span>
																</div>
															</div>
														</a>
													</td>
													<td>
														<a class="d-flex">
															<span class="avatar avatar-lg me-2">
																<img src="assets/img/user/user-01.jpg" class="rounded-circle img-fluid" alt="Img">
															</span>
															<div class="d-flex align-items-center">
																<div>
																	<h6 class="fs-14">John Smith</h6>
																	<span class="text-gray fs-14"><span class="__cf_email__" data-cfemail="f79d989f99b7909a969e9bd994989a">[email&#160;protected]</span></span>
																</div>
															</div>
														</a>
													</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
													</td>
												</tr>
												<tr>
													<td>
														<a href="booking-details.html" class="d-flex">
															<span class="avatar avatar-lg me-2">
																<img src="assets/img/providers/provider-13.jpg" class="img-fluid" alt="Img">
															</span>
															<div class="d-flex align-items-center">
																<div>
																	<h6 class="fs-14">Car Repair </h6>
																	<span class="text-gray fs-12 me-1">
																		<i class="feather-calendar"></i>
																		15 Oct 2022
																	</span>
																</div>
															</div>
														</a>
													</td>
													<td>
														<a href="javascript:void(0);" class="d-flex">
															<span class="avatar avatar-lg me-2">
																<img src="assets/img/user/user-02.jpg" class="rounded-circle img-fluid" alt="Img">
															</span>
															<div class="d-flex align-items-center">
																<div>
																	<h6 class="fs-14">Timothy</h6>
																	<span class="text-gray fs-14"><span class="__cf_email__" data-cfemail="7b0f1216140f13023b1c161a121755181416">[email&#160;protected]</span></span>
																</div>
															</div>
														</a>
													</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
													</td>
												</tr>
												<tr>
													<td>
														<a href="booking-details.html" class="d-flex">
															<span class="avatar avatar-lg me-2">
																<img src="assets/img/providers/provider-16.jpg" class="img-fluid" alt="Img">
															</span>
															<div class="d-flex align-items-center">
																<div>
																	<h6 class="fs-14">Interior Designing </h6>
																	<span class="text-gray fs-12 me-1">
																		<i class="feather-calendar"></i>
																		18 Oct 2022
																	</span>
																</div>
															</div>
														</a>
													</td>
													<td>
														<a class="d-flex">
															<span class="avatar avatar-lg me-2">
																<img src="assets/img/user/user-03.jpg" class="rounded-circle img-fluid" alt="Img">
															</span>
															<div class="d-flex align-items-center">
																<div>
																	<h6 class="fs-14">Jordan</h6>
																	<span class="text-gray fs-14"><span class="__cf_email__" data-cfemail="640e0b1600050a240309050d084a070b09">[email&#160;protected]</span></span>
																</div>
															</div>
														</a>
													</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
													</td>
												</tr>
												<tr>
													<td>
														<a href="booking-details.html" class="d-flex">
															<span class="avatar avatar-lg me-2">
																<img src="assets/img/providers/provider-17.jpg" class="img-fluid" alt="Img">
															</span>
															<div class="d-flex align-items-center">
																<div>
																	<h6 class="fs-14">Steam Car Wash</h6>
																	<span class="text-gray fs-12 me-1">
																		<i class="feather-calendar"></i>
																		28 Oct 2022
																	</span>
																</div>
															</div>
														</a>
													</td>
													<td>
														<a href="javascript:void(0);" class="d-flex">
															<span class="avatar avatar-lg me-2">
																<img src="assets/img/user/user-05.jpg" class="rounded-circle img-fluid" alt="Img">
															</span>
															<div class="d-flex align-items-center">
																<div>
																	<h6 class="fs-14">Armand</h6>
																	<span class="text-gray fs-14"><span class="__cf_email__" data-cfemail="3051425d515e5470575d51595c1e535f5d">[email&#160;protected]</span></span>
																</div>
															</div>
														</a>
													</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
													</td>
												</tr>
												<tr>
													<td>
														<a href="booking-details.html" class="d-flex">
															<span class="avatar avatar-lg me-2">
																<img src="assets/img/providers/provider-19.jpg" class="img-fluid" alt="Img">
															</span>
															<div class="d-flex align-items-center">
																<div>
																	<h6 class="fs-14">House Cleaning</h6>
																	<span class="text-gray fs-12 me-1">
																		<i class="feather-calendar"></i>
																		10 Nov 2022
																	</span>
																</div>
															</div>
														</a>
													</td>
													<td>
														<a href="javascript:void(0);" class="d-flex">
															<span class="avatar avatar-lg me-2">
																<img src="assets/img/user/user-04.jpg" class="rounded-circle img-fluid" alt="Img">
															</span>
															<div class="d-flex align-items-center">
																<div>
																	<h6 class="fs-14">Joseph</h6>
																	<span class="text-gray fs-14"><span class="__cf_email__" data-cfemail="701a1f0315001830171d11191c5e131f1d">[email&#160;protected]</span></span>
																</div>
															</div>
														</a>
													</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
													</td>
												</tr>
												<tr>
													<td>
														<a href="booking-details.html" class="d-flex">
															<span class="avatar avatar-lg me-2">
																<img src="assets/img/providers/provider-09.jpg" class="img-fluid" alt="Img">
															</span>
															<div class="d-flex align-items-center">
																<div>
																	<h6 class="fs-14">Car Repair</h6>
																	<span class="text-gray fs-12 me-1">
																		<i class="feather-calendar"></i>
																		10 Nov 2022
																	</span>
																</div>
															</div>
														</a>
													</td>
													<td>
														<a href="javascript:void(0);" class="d-flex">
															<span class="avatar avatar-lg me-2">
																<img src="assets/img/user/user-06.jpg" class="rounded-circle img-fluid" alt="Img">
															</span>
															<div class="d-flex align-items-center">
																<div>
																	<h6 class="fs-14">Adrian</h6>
																	<span class="text-gray fs-14"><span class="__cf_email__" data-cfemail="1e747f7a6c777f705e79737f7772307d7173">[email&#160;protected]</span></span>
																</div>
															</div>
														</a>
													</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>								
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
     </div>
    <!-- /Page Wrapper -->

    <!-- Footer -->
	<?php @include "inc/footer.php";?>