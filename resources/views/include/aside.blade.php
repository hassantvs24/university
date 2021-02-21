<!--begin::Aside-->
<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
    <!--begin::Brand-->
    <div class="brand flex-column-auto" id="kt_brand">
        <!--begin::Logo-->
        <a href="{{route('dashboard')}}" class="brand-logo">
            <img alt="Logo" src="assets/media/logos/logo-light.png" />
        </a>
        <!--end::Logo-->
        <!--begin::Toggle-->
        <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
							<span class="svg-icon svg-icon svg-icon-xl">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
										<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
									</g>
								</svg>
                                <!--end::Svg Icon-->
							</span>
        </button>
        <!--end::Toolbar-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside Menu-->
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <!--begin::Menu Container-->
        <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
            <!--begin::Menu Nav-->
            <ul class="menu-nav">
                <li class="menu-item" aria-haspopup="true">
                    <a href="index.html" class="menu-link">
                        <i class="menu-icon flaticon-home"></i>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>
                <li class="menu-section">
                    <h4 class="menu-text">Custom</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon-web"></i>
                        <span class="menu-text">Applications</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link">
                                    <span class="menu-text">Applications</span>
                                </span>
                            </li>
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <i class="menu-bullet menu-bullet-line">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Users</span>
                                    <span class="menu-label">
														<span class="label label-rounded label-primary">6</span>
													</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/user/list-default.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">List - Default</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/user/list-datatable.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">List - Datatable</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/user/list-columns-1.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">List - Columns 1</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/user/list-columns-2.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">List - Columns 2</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/user/add-user.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Add User</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/user/edit-user.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Edit User</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <i class="menu-bullet menu-bullet-line">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Profile</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                            <a href="javascript:;" class="menu-link menu-toggle">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Profile 1</span>
                                                <i class="menu-arrow"></i>
                                            </a>
                                            <div class="menu-submenu">
                                                <i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="custom/apps/profile/profile-1/overview.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-line">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Overview</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="custom/apps/profile/profile-1/personal-information.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-line">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Personal Information</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="custom/apps/profile/profile-1/account-information.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-line">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Account Information</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="custom/apps/profile/profile-1/change-password.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-line">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Change Password</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="custom/apps/profile/profile-1/email-settings.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-line">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Email Settings</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/profile/profile-2.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Profile 2</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/profile/profile-3.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Profile 3</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/profile/profile-4.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Profile 4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <i class="menu-bullet menu-bullet-line">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Contacts</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/contacts/list-columns.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">List - Columns</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/contacts/list-datatable.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">List - Datatable</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/contacts/view-contact.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">View Contact</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/contacts/add-contact.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Add Contact</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/contacts/edit-contact.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Edit Contact</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <i class="menu-bullet menu-bullet-line">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Projects</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/projects/list-columns-1.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">List - Columns 1</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/projects/list-columns-2.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">List - Columns 2</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/projects/list-columns-3.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">List - Columns 3</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/projects/list-columns-4.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">List - Columns 4</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/projects/list-datatable.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">List - Datatable</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/projects/view-project.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">View Project</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/projects/add-project.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Add Project</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/projects/edit-project.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Edit Project</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <i class="menu-bullet menu-bullet-line">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Support Center</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/support-center/home-1.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Home 1</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/support-center/home-2.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Home 2</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/support-center/faq-1.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">FAQ 1</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/support-center/faq-2.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">FAQ 2</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/support-center/faq-3.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">FAQ 3</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/support-center/feedback.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Feedback</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/support-center/license.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">License</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <i class="menu-bullet menu-bullet-line">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Chat</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/chat/private.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Private</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/chat/group.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Group</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/chat/popup.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Popup</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <i class="menu-bullet menu-bullet-line">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Todo</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/todo/tasks.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Tasks</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/todo/docs.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Docs</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/todo/files.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Files</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <i class="menu-bullet menu-bullet-line">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Education</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                            <a href="javascript:;" class="menu-link menu-toggle">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">School</span>
                                                <i class="menu-arrow"></i>
                                            </a>
                                            <div class="menu-submenu">
                                                <i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="custom/apps/education/school/dashboard.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-line">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Dashboard</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="custom/apps/education/school/statistics.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-line">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Statistics</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="custom/apps/education/school/calendar.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-line">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Calendar</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="custom/apps/education/school/library.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-line">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Library</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="custom/apps/education/school/teachers.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-line">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Teachers</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="custom/apps/education/school/students.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-line">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Students</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                            <a href="javascript:;" class="menu-link menu-toggle">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Student</span>
                                                <i class="menu-arrow"></i>
                                            </a>
                                            <div class="menu-submenu">
                                                <i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="custom/apps/education/student/dashboard.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-line">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Dashboard</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="custom/apps/education/student/profile.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-line">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Profile</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="custom/apps/education/student/calendar.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-line">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Calendar</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="custom/apps/education/student/classmates.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-line">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Classmates</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/education/class/dashboard.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Class</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <i class="menu-bullet menu-bullet-line">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">eCommerce</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/ecommerce/dashboard.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Dashboard 1</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/ecommerce/dashboard-2.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Dashboard 2</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/ecommerce/dashboard-3.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Dashboard 3</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/ecommerce/product-1.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Product 1</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/ecommerce/product-2.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Product 2</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/ecommerce/product-3.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Product 3</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/ecommerce/product-3.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">My Orders</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/ecommerce/order-details.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Order Details</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/ecommerce/shopping-cart.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Shopping Cart</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/apps/ecommerce/checkout.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Checkout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="custom/apps/inbox.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-line">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Inbox</span>
                                    <span class="menu-label">
														<span class="label label-danger label-inline">new</span>
													</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon-tabs"></i>
                        <span class="menu-text">Pages</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Pages</span>
												</span>
                            </li>
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Login</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/pages/login/login-1.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Login 1</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/pages/login/login-2.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Login 2</span>
                                            </a>
                                        </li>
                                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                            <a href="javascript:;" class="menu-link menu-toggle">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Login 3</span>
                                                <span class="menu-label">
																	<span class="label label-inline label-info">Wizard</span>
																</span>
                                                <i class="menu-arrow"></i>
                                            </a>
                                            <div class="menu-submenu">
                                                <i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="custom/pages/login/login-3/signup.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Sign Up</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="custom/pages/login/login-3/signin.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Sign In</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="custom/pages/login/login-3/forgot.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Forgot Password</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                            <a href="javascript:;" class="menu-link menu-toggle">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Login 4</span>
                                                <span class="menu-label">
																	<span class="label label-inline label-info">Wizard</span>
																</span>
                                                <i class="menu-arrow"></i>
                                            </a>
                                            <div class="menu-submenu">
                                                <i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="custom/pages/login/login-4/signup.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Sign Up</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="custom/pages/login/login-4/signin.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Sign In</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="custom/pages/login/login-4/forgot.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Forgot Password</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                            <a href="javascript:;" class="menu-link menu-toggle">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Classic</span>
                                                <i class="menu-arrow"></i>
                                            </a>
                                            <div class="menu-submenu">
                                                <i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="custom/pages/login/classic/login-1.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Login 1</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="custom/pages/login/classic/login-2.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Login 2</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="custom/pages/login/classic/login-3.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Login 3</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="custom/pages/login/classic/login-4.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Login 4</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="custom/pages/login/classic/login-5.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Login 5</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="custom/pages/login/classic/login-6.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Login 6</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Wizard</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/pages/wizard/wizard-1.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Wizard 1</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/pages/wizard/wizard-2.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Wizard 2</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/pages/wizard/wizard-3.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Wizard 3</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/pages/wizard/wizard-4.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Wizard 4</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/pages/wizard/wizard-5.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Wizard 5</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/pages/wizard/wizard-6.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Wizard 6</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Pricing Tables</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/pages/pricing/pricing-1.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Pricing Tables 1</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/pages/pricing/pricing-2.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Pricing Tables 2</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/pages/pricing/pricing-3.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Pricing Tables 3</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/pages/pricing/pricing-4.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Pricing Tables 4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Invoices</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/pages/invoices/invoice-1.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Invoice 1</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/pages/invoices/invoice-2.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Invoice 2</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/pages/invoices/invoice-3.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Invoice 3</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/pages/invoices/invoice-4.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Invoice 4</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/pages/invoices/invoice-5.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Invoice 5</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/pages/invoices/invoice-6.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Invoice 6</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Error</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/pages/error/error-1.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Error 1</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/pages/error/error-2.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Error 2</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/pages/error/error-3.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Error 3</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/pages/error/error-4.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Error 4</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/pages/error/error-5.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Error 5</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="custom/pages/error/error-6.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Error 6</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-section">
                    <h4 class="menu-text">Layout</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon-graphic"></i>
                        <span class="menu-text">Themes</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Themes</span>
												</span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="layout/themes/aside-light.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Light Aside</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="layout/themes/header-dark.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Dark Header</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon-layers"></i>
                        <span class="menu-text">Subheaders</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Subheaders</span>
												</span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="layout/subheader/toolbar.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Toolbar Nav</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="layout/subheader/actions.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Actions Buttons</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="layout/subheader/tabbed.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Tabbed Nav</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="layout/subheader/classic.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Classic</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="layout/subheader/none.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">None</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu menu-item-open menu-item-here" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon-interface-8"></i>
                        <span class="menu-text">General</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">General</span>
												</span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="layout/general/fluid-content.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Fluid Content</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="layout/general/minimized-aside.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Minimized Aside</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="layout/general/no-aside.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">No Aside</span>
                                </a>
                            </li>
                            <li class="menu-item menu-item-active" aria-haspopup="true">
                                <a href="layout/general/empty-page.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Empty Page</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="layout/general/fixed-footer.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Fixed Footer</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="layout/general/no-header-menu.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">No Header Menu</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item" aria-haspopup="true">
                    <a target="_blank" href="https://preview.keenthemes.com/metronic/demo1/builder.html" class="menu-link">
                        <i class="menu-icon flaticon-cogwheel-1"></i>
                        <span class="menu-text">Builder</span>
                    </a>
                </li>
                <li class="menu-section">
                    <h4 class="menu-text">CRUD</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon-interface-7"></i>
                        <span class="menu-text">Forms</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Forms</span>
												</span>
                            </li>
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Form Controls</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/controls/base.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Base Inputs</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/controls/input-group.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Input Groups</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/controls/checkbox.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Checkbox</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/controls/radio.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Radio</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/controls/switch.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Switch</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/controls/option.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Mega Options</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Form Widgets</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/widgets/bootstrap-datetimepicker.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Datetimepicker</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/widgets/bootstrap-datepicker.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Datepicker</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/widgets/bootstrap-timepicker.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Timepicker</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/widgets/bootstrap-daterangepicker.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Daterangepicker</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/widgets/tagify.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Tagify</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/widgets/bootstrap-touchspin.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Touchspin</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/widgets/bootstrap-maxlength.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Maxlength</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/widgets/bootstrap-switch.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Switch</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/widgets/bootstrap-multipleselectsplitter.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Multiple Select Splitter</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/widgets/bootstrap-select.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Bootstrap Select</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/widgets/select2.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Select2</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/widgets/typeahead.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Typeahead</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/widgets/nouislider.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">noUiSlider</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/widgets/form-repeater.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Form Repeater</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/widgets/ion-range-slider.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Ion Range Slider</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/widgets/input-mask.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Input Masks</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/widgets/jquery-mask.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">jQuery Mask</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/widgets/autosize.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Autosize</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/widgets/clipboard.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Clipboard</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/widgets/recaptcha.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Google reCaptcha</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Form Text Editors</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/editors/tinymce.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">TinyMCE</span>
                                            </a>
                                        </li>
                                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                            <a href="javascript:;" class="menu-link menu-toggle">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">CKEditor</span>
                                                <i class="menu-arrow"></i>
                                            </a>
                                            <div class="menu-submenu">
                                                <i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="crud/forms/editors/ckeditor-classic.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-line">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">CKEditor Classic</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="crud/forms/editors/ckeditor-inline.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-line">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">CKEditor Inline</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="crud/forms/editors/ckeditor-balloon.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-line">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">CKEditor Balloon</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="crud/forms/editors/ckeditor-balloon-block.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-line">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">CKEditor Balloon Block</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item" aria-haspopup="true">
                                                        <a href="crud/forms/editors/ckeditor-document.html" class="menu-link">
                                                            <i class="menu-bullet menu-bullet-line">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">CKEditor Document</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/editors/quill.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Quill Text Editor</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/editors/summernote.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Summernote WYSIWYG</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/editors/bootstrap-markdown.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Markdown Editor</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Form Layouts</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/layouts/default-forms.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Default Forms</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/layouts/multi-column-forms.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Multi Column Forms</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/layouts/action-bars.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Basic Action Bars</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/layouts/sticky-action-bar.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Sticky Action Bar</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Form Validation</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/validation/states.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Validation States</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/validation/form-controls.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Form Controls</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/forms/validation/form-widgets.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Form Widgets</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon-tabs"></i>
                        <span class="menu-text">KTDatatable</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">KTDatatable</span>
												</span>
                            </li>
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Base</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/ktdatatable/base/data-local.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Local Data</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/ktdatatable/base/data-json.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">JSON Data</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/ktdatatable/base/data-ajax.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Ajax Data</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/ktdatatable/base/html-table.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">HTML Table</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/ktdatatable/base/local-sort.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Local Sort</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/ktdatatable/base/translation.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Translation</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Advanced</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/ktdatatable/advanced/record-selection.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Record Selection</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/ktdatatable/advanced/row-details.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Row Details</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/ktdatatable/advanced/modal.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Modal Examples</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/ktdatatable/advanced/column-rendering.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Column Rendering</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/ktdatatable/advanced/column-width.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Column Width</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/ktdatatable/advanced/vertical.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Vertical Scrolling</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Child Datatables</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/ktdatatable/child/data-local.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Local Data</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/ktdatatable/child/data-ajax.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Remote Data</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">API</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/ktdatatable/api/methods.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">API Methods</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/ktdatatable/api/events.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Events</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon-list-3"></i>
                        <span class="menu-text">Datatables.net</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Datatables.net</span>
												</span>
                            </li>
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Basic</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/datatables/basic/basic.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Basic Tables</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/datatables/basic/scrollable.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Scrollable Tables</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/datatables/basic/headers.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Complex Headers</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/datatables/basic/paginations.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Pagination Options</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Advanced</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/datatables/advanced/column-rendering.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Column Rendering</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/datatables/advanced/multiple-controls.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Multiple Controls</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/datatables/advanced/column-visibility.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Column Visibility</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/datatables/advanced/row-callback.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Row Callback</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/datatables/advanced/row-grouping.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Row Grouping</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/datatables/advanced/footer-callback.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Footer Callback</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Data sources</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/datatables/data-sources/html.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">HTML</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/datatables/data-sources/javascript.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Javascript</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/datatables/data-sources/ajax-client-side.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Ajax Client-side</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/datatables/data-sources/ajax-server-side.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Ajax Server-side</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Search Options</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/datatables/search-options/column-search.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Column Search</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/datatables/search-options/advanced-search.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Advanced Search</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Extensions</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/datatables/extensions/buttons.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Buttons</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/datatables/extensions/colreorder.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">ColReorder</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/datatables/extensions/keytable.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">KeyTable</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/datatables/extensions/responsive.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Responsive</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/datatables/extensions/rowgroup.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">RowGroup</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/datatables/extensions/rowreorder.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">RowReorder</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/datatables/extensions/scroller.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Scroller</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="crud/datatables/extensions/select.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Select</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon-upload-1"></i>
                        <span class="menu-text">File Upload</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item" aria-haspopup="true">
                                <a href="crud/file-upload/image-input.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Image Input</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="crud/file-upload/dropzonejs.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">DropzoneJS</span>
                                    <span class="menu-label">
														<span class="label label-danger label-inline">new</span>
													</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="crud/file-upload/uppy.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Uppy</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-section">
                    <h4 class="menu-text">Features</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon-layers"></i>
                        <span class="menu-text">Bootstrap</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Bootstrap</span>
												</span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/bootstrap/typography.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Typography</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/bootstrap/buttons.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Buttons</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/bootstrap/button-group.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Button Group</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/bootstrap/dropdown.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Dropdown</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/bootstrap/navs.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Navs</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/bootstrap/tables.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Tables</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/bootstrap/progress.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Progress</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/bootstrap/modal.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Modal</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/bootstrap/alerts.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Alerts</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/bootstrap/popover.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Popover</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/bootstrap/tooltip.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Tooltip</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon-background"></i>
                        <span class="menu-text">Custom</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Custom</span>
												</span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/custom/utilities.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Utilities</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/custom/label.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Labels</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/custom/pulse.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Pulse</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/custom/line-tabs.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Line Tabs</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/custom/advance-navs.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Advance Navs</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/custom/timeline.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Timeline</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/custom/pagination.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Pagination</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/custom/symbol.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Symbol</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/custom/overlay.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Overlay</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/custom/spinners.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Spinners</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/custom/iconbox.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Iconbox</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/custom/callout.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Callout</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/custom/ribbons.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Ribbons</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/custom/accordions.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Accordions</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon-interface-1"></i>
                        <span class="menu-text">Cards</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Cards</span>
												</span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/cards/general.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">General Cards</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/cards/stacked.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Stacked Cards</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/cards/tabbed.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Tabbed Cards</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/cards/draggable.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Draggable Cards</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/cards/tools.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Cards Tools</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/cards/sticky.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Sticky Cards</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/cards/stretched.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Stretched Cards</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon-rocket"></i>
                        <span class="menu-text">Widgets</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Widgets</span>
												</span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/widgets/lists.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Lists</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/widgets/stats.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Stats</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/widgets/charts.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Charts</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/widgets/mixed.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Mixed</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/widgets/tiles.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Tiles</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/widgets/engage.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Engage</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/widgets/base-tables.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Base Tables</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/widgets/advance-tables.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Advance Tables</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/widgets/feeds.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Feeds</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/widgets/nav-panels.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Nav Panels</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon-open-box"></i>
                        <span class="menu-text">Icons</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/icons/svg.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">SVG Icons</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/icons/custom-icons.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Custom Icons</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/icons/flaticon.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Flaticon</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/icons/fontawesome5.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Fontawesome 5</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/icons/lineawesome.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Lineawesome</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/icons/socicons.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Socicons</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon-calendar"></i>
                        <span class="menu-text">Calendar</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Calendar</span>
												</span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/calendar/basic.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Basic Calendar</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/calendar/list-view.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">List Views</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/calendar/google.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Google Calendar</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/calendar/external-events.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">External Events</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/calendar/background-events.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Background Events</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon-diagram"></i>
                        <span class="menu-text">Charts</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Charts</span>
												</span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/charts/apexcharts.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Apexcharts</span>
                                </a>
                            </li>
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">amCharts</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="features/charts/amcharts/charts.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">amCharts Charts</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="features/charts/amcharts/stock-charts.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">amCharts Stock Charts</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="features/charts/amcharts/maps.html" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">amCharts Maps</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/charts/flotcharts.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Flot Charts</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/charts/google-charts.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Google Charts</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon-placeholder"></i>
                        <span class="menu-text">Maps</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Maps</span>
												</span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/maps/google-maps.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Google Maps</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/maps/leaflet.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Leaflet</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/maps/jqvmap.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">JQVMap</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon-light"></i>
                        <span class="menu-text">Miscellaneous</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Miscellaneous</span>
												</span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/miscellaneous/kanban-board.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Kanban Board</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/miscellaneous/sticky-panels.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Sticky Panels</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/miscellaneous/blockui.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Block UI</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/miscellaneous/perfect-scrollbar.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Perfect Scrollbar</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/miscellaneous/treeview.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Tree View</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/miscellaneous/bootstrap-notify.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Bootstrap Notify</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/miscellaneous/toastr.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Toastr</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/miscellaneous/sweetalert2.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">SweetAlert2</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/miscellaneous/dual-listbox.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Dual Listbox</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/miscellaneous/session-timeout.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Session Timeout</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/miscellaneous/idle-timer.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Idle Timer</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="features/miscellaneous/cropper.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Cropper</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <!--end::Menu Nav-->
        </div>
        <!--end::Menu Container-->
    </div>
    <!--end::Aside Menu-->
</div>
<!--end::Aside-->