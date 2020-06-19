<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // club_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'ClubBundle\\Controller\\DefaultController::indexAction',  '_route' => 'club_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_club_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'club_homepage'));
            }

            return $ret;
        }
        not_club_homepage:

        if (0 === strpos($pathinfo, '/ad')) {
            // club_Add
            if ('/addClub' === $pathinfo) {
                return array (  '_controller' => 'ClubBundle\\Controller\\ClubController::addClubAction',  '_route' => 'club_Add',);
            }

            // club_AddA
            if ('/addActivities' === $pathinfo) {
                return array (  '_controller' => 'ClubBundle\\Controller\\ClubController::addActivityAction',  '_route' => 'club_AddA',);
            }

            if (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/add')) {
                    // class_add
                    if ('/admin/add' === $pathinfo) {
                        return array (  '_controller' => 'classBundle\\Controller\\classeController::addAction',  '_route' => 'class_add',);
                    }

                    // class_addTimeTable
                    if ('/admin/addTimeTable' === $pathinfo) {
                        return array (  '_controller' => 'classBundle\\Controller\\classeController::addTimeTableAction',  '_route' => 'class_addTimeTable',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/delete')) {
                    // class_delete
                    if (preg_match('#^/admin/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'class_delete']), array (  '_controller' => 'classBundle\\Controller\\classeController::deleteAction',));
                    }

                    // class_deleteTimeTable
                    if (0 === strpos($pathinfo, '/admin/deleteTimeTable') && preg_match('#^/admin/deleteTimeTable/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'class_deleteTimeTable']), array (  '_controller' => 'classBundle\\Controller\\classeController::deleteTimeTableAction',));
                    }

                    // deleteexams
                    if (0 === strpos($pathinfo, '/admin/deletee') && preg_match('#^/admin/deletee/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteexams']), array (  '_controller' => 'ExamsBundle\\Controller\\ExamController::deleteAction',));
                    }

                    // delete-subject
                    if (0 === strpos($pathinfo, '/admin/delete-subject') && preg_match('#^/admin/delete\\-subject/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete-subject']), array (  '_controller' => 'CourseBundle\\Controller\\SubjectController::deleteAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/update')) {
                    // class_update
                    if (preg_match('#^/admin/update/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'class_update']), array (  '_controller' => 'classBundle\\Controller\\classeController::updateAction',));
                    }

                    // class_updateTimeTable
                    if (0 === strpos($pathinfo, '/admin/updateTimeTable') && preg_match('#^/admin/updateTimeTable/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'class_updateTimeTable']), array (  '_controller' => 'classBundle\\Controller\\classeController::updateTimeTableAction',));
                    }

                    // updateexams
                    if (0 === strpos($pathinfo, '/admin/updatee') && preg_match('#^/admin/updatee/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'updateexams']), array (  '_controller' => 'ExamsBundle\\Controller\\ExamController::updateAction',));
                    }

                    // update-subject
                    if (0 === strpos($pathinfo, '/admin/update-subject') && preg_match('#^/admin/update\\-subject/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'update-subject']), array (  '_controller' => 'CourseBundle\\Controller\\SubjectController::updateAction',));
                    }

                }

                // createexams
                if ('/admin/createexams' === $pathinfo) {
                    return array (  '_controller' => 'ExamsBundle\\Controller\\ExamController::createAction',  '_route' => 'createexams',);
                }

                // create-subject
                if ('/admin/create-subject' === $pathinfo) {
                    return array (  '_controller' => 'CourseBundle\\Controller\\SubjectController::createAction',  '_route' => 'create-subject',);
                }

                // testRoleAdmin
                if ('/admin/test' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::testRoleAdminAction',  '_route' => 'testRoleAdmin',);
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/d')) {
            // club_display
            if ('/displayClubs' === $pathinfo) {
                return array (  '_controller' => 'ClubBundle\\Controller\\ClubController::displayClubsAction',  '_route' => 'club_display',);
            }

            // club_displayActivity
            if ('/displayActivities' === $pathinfo) {
                return array (  '_controller' => 'ClubBundle\\Controller\\ClubController::displayActivitiesAction',  '_route' => 'club_displayActivity',);
            }

            if (0 === strpos($pathinfo, '/de')) {
                // club_deleteClub
                if (0 === strpos($pathinfo, '/deleteClub') && preg_match('#^/deleteClub/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'club_deleteClub']), array (  '_controller' => 'ClubBundle\\Controller\\ClubController::deleteClubAction',));
                }

                // club_deleteActivity
                if (0 === strpos($pathinfo, '/deleteActivity') && preg_match('#^/deleteActivity/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'club_deleteActivity']), array (  '_controller' => 'ClubBundle\\Controller\\ClubController::deleteActivityAction',));
                }

                if (0 === strpos($pathinfo, '/detail')) {
                    // detail_club
                    if (0 === strpos($pathinfo, '/detailsCat') && preg_match('#^/detailsCat/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'detail_club']), array (  '_controller' => 'ClubBundle\\Controller\\ClubController::clubDetailsAction',));
                    }

                    // clubDetailsfront
                    if (0 === strpos($pathinfo, '/detailCatf') && preg_match('#^/detailCatf/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'clubDetailsfront']), array (  '_controller' => 'ClubBundle\\Controller\\ClubController::clubDetailsfrontAction',));
                    }

                    // activityDetailsFront
                    if (0 === strpos($pathinfo, '/detailActf') && preg_match('#^/detailActf/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'activityDetailsFront']), array (  '_controller' => 'ClubBundle\\Controller\\ClubController::activityDetailsFrontAction',));
                    }

                }

            }

        }

        elseif (0 === strpos($pathinfo, '/u')) {
            // club_updateClub
            if (0 === strpos($pathinfo, '/updateClub') && preg_match('#^/updateClub/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'club_updateClub']), array (  '_controller' => 'ClubBundle\\Controller\\ClubController::updateClubAction',));
            }

            // club_updateActivity
            if (0 === strpos($pathinfo, '/updateActivity') && preg_match('#^/updateActivity/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'club_updateActivity']), array (  '_controller' => 'ClubBundle\\Controller\\ClubController::updateActivityAction',));
            }

            // testRoleUser
            if ('/user/test' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::testRoleUserAction',  '_route' => 'testRoleUser',);
            }

        }

        // club_welcome
        if ('/welcome' === $pathinfo) {
            return array (  '_controller' => 'ClubBundle\\Controller\\ClubController::welcomeAction',  '_route' => 'club_welcome',);
        }

        // club_afficheFront
        if ('/front' === $pathinfo) {
            return array (  '_controller' => 'ClubBundle\\Controller\\ClubController::displayClubsfrontAction',  '_route' => 'club_afficheFront',);
        }

        // export
        if ('/export' === $pathinfo) {
            return array (  '_controller' => 'ClubBundle\\Controller\\ClubController::exportAction',  '_route' => 'export',);
        }

        // class_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'classBundle\\Controller\\DefaultController::homeAction',  '_route' => 'class_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_class_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'class_homepage'));
            }

            return $ret;
        }
        not_class_homepage:

        if (0 === strpos($pathinfo, '/re')) {
            // class_read
            if ('/read' === $pathinfo) {
                return array (  '_controller' => 'classBundle\\Controller\\classeController::readAction',  '_route' => 'class_read',);
            }

            if (0 === strpos($pathinfo, '/readT')) {
                // class_readTimeTable
                if ('/readTimeTable' === $pathinfo) {
                    return array (  '_controller' => 'classBundle\\Controller\\classeController::readTimeTableAction',  '_route' => 'class_readTimeTable',);
                }

                // class_Ttime
                if ('/readT' === $pathinfo) {
                    return array (  '_controller' => 'classBundle\\Controller\\classeController::readTimeAction',  '_route' => 'class_Ttime',);
                }

            }

            // replynot
            if ('/repynotifiication' === $pathinfo) {
                return array (  '_controller' => 'BinBundle\\Controller\\notificationController::replyAction',  '_route' => 'replynot',);
            }

            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_registration_register;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                    }

                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_registration_register;
                    }

                    return $ret;
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_check_email;
                    }

                    return $ret;
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_fos_user_registration_confirm;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_fos_user_registration_confirmed;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            elseif (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_resetting_request;
                    }

                    return $ret;
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_resetting_reset;
                    }

                    return $ret;
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_fos_user_resetting_send_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_resetting_check_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_check_email:

            }

        }

        elseif (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/searchT')) {
                // class_searchTimeTable
                if ('/searchTimeTable' === $pathinfo) {
                    return array (  '_controller' => 'classBundle\\Controller\\classeController::searchTimeTableAction',  '_route' => 'class_searchTimeTable',);
                }

                // class_searchTtime
                if ('/searchT' === $pathinfo) {
                    return array (  '_controller' => 'classBundle\\Controller\\classeController::readTimeTableAction',  '_route' => 'class_searchTtime',);
                }

                // class_searchTimeTableFront
                if ('/searchTimeTableFront' === $pathinfo) {
                    return array (  '_controller' => 'classBundle\\Controller\\classeController::searchTimeTableFrontAction',  '_route' => 'class_searchTimeTableFront',);
                }

            }

            // searchabscenses
            if ('/searchabscense' === $pathinfo) {
                return array (  '_controller' => 'BinBundle\\Controller\\abscenseController::searchAction',  '_route' => 'searchabscenses',);
            }

            if (0 === strpos($pathinfo, '/show')) {
                // showab
                if (0 === strpos($pathinfo, '/showabscense') && preg_match('#^/showabscense/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'showab']), array (  '_controller' => 'BinBundle\\Controller\\abscenseController::showAction',));
                }

                // shownot
                if (0 === strpos($pathinfo, '/shownotifiication') && preg_match('#^/shownotifiication/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'shownot']), array (  '_controller' => 'BinBundle\\Controller\\notificationController::showAction',));
                }

                // show-courses
                if ('/show-courses' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'CourseBundle\\Controller\\CourseController::showAction',  '_route' => 'show-courses',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_showcourses;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'show-courses'));
                    }

                    return $ret;
                }
                not_showcourses:

                // show-subjects
                if ('/show-subjects' === $pathinfo) {
                    return array (  '_controller' => 'CourseBundle\\Controller\\SubjectController::showAction',  '_route' => 'show-subjects',);
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/home')) {
            // class_home
            if ('/home' === $pathinfo) {
                return array (  '_controller' => 'classBundle\\Controller\\DefaultController::homeAction',  '_route' => 'class_home',);
            }

            // class_homeFrontpage
            if ('/homeFront' === $pathinfo) {
                return array (  '_controller' => 'classBundle\\Controller\\DefaultController::homeFrontAction',  '_route' => 'class_homeFrontpage',);
            }

            // home
            if ('/home' === $pathinfo) {
                return array (  '_controller' => 'BinBundle\\Controller\\DefaultController::homeAction',  '_route' => 'home',);
            }

            // homeback
            if ('/homeback' === $pathinfo) {
                return array (  '_controller' => 'ExamsBundle\\Controller\\DefaultController::backindexAction',  '_route' => 'homeback',);
            }

            // exams_homepage
            if ('/homef' === $pathinfo) {
                return array (  '_controller' => 'ExamsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'exams_homepage',);
            }

        }

        elseif (0 === strpos($pathinfo, '/p')) {
            // class_pdf
            if ('/pdfM' === $pathinfo) {
                return array (  '_controller' => 'classBundle\\Controller\\classeController::indexmAction',  '_route' => 'class_pdf',);
            }

            // traitnot
            if (0 === strpos($pathinfo, '/parent/tratenotification') && preg_match('#^/parent/tratenotification/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'traitnot']), array (  '_controller' => 'BinBundle\\Controller\\notificationController::treatAction',));
            }

            if (0 === strpos($pathinfo, '/profile')) {
                // fos_user_profile_show
                if ('/profile' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_profile_show;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_profile_show;
                    }

                    return $ret;
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ('/profile/edit' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_profile_edit;
                    }

                    return $ret;
                }
                not_fos_user_profile_edit:

                // fos_user_change_password
                if ('/profile/change-password' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_change_password;
                    }

                    return $ret;
                }
                not_fos_user_change_password:

            }

        }

        elseif (0 === strpos($pathinfo, '/c')) {
            // class_createTtable
            if ('/createTtable' === $pathinfo) {
                return array (  '_controller' => 'classBundle\\Controller\\classeController::createTtableAction',  '_route' => 'class_createTtable',);
            }

            // calabs
            if (0 === strpos($pathinfo, '/calabscense') && preg_match('#^/calabscense/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'calabs']), array (  '_controller' => 'BinBundle\\Controller\\abscenseController::calendarAction',));
            }

            // course-table
            if ('/course-table' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::tableAction',  '_route' => 'course-table',);
            }

        }

        elseif (0 === strpos($pathinfo, '/l')) {
            if (0 === strpos($pathinfo, '/list')) {
                // class_readClass
                if ('/listClassFront' === $pathinfo) {
                    return array (  '_controller' => 'classBundle\\Controller\\classeController::listClassFrontAction',  '_route' => 'class_readClass',);
                }

                if (0 === strpos($pathinfo, '/listabscense')) {
                    // listabsences
                    if ('/listabscense' === $pathinfo) {
                        return array (  '_controller' => 'BinBundle\\Controller\\abscenseController::listAction',  '_route' => 'listabsences',);
                    }

                    // listabsencesFront
                    if ('/listabscenseFront' === $pathinfo) {
                        return array (  '_controller' => 'BinBundle\\Controller\\abscenseController::listFrontAction',  '_route' => 'listabsencesFront',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/listnotification')) {
                    // listnot
                    if ('/listnotification' === $pathinfo) {
                        return array (  '_controller' => 'BinBundle\\Controller\\notificationController::listAction',  '_route' => 'listnot',);
                    }

                    // listnotFront
                    if ('/listnotificationFront' === $pathinfo) {
                        return array (  '_controller' => 'BinBundle\\Controller\\notificationController::listFrontAction',  '_route' => 'listnotFront',);
                    }

                }

                // afficheexams
                if ('/listeexams' === $pathinfo) {
                    return array (  '_controller' => 'ExamsBundle\\Controller\\ExamController::readerAction',  '_route' => 'afficheexams',);
                }

                // affichegrades
                if ('/listegrades' === $pathinfo) {
                    return array (  '_controller' => 'ExamsBundle\\Controller\\GradeController::readerAction',  '_route' => 'affichegrades',);
                }

                // affichebackexams
                if ('/listbackexams' === $pathinfo) {
                    return array (  '_controller' => 'ExamsBundle\\Controller\\ExamController::readAction',  '_route' => 'affichebackexams',);
                }

                // affichebackgrades
                if ('/listbackgrades' === $pathinfo) {
                    return array (  '_controller' => 'ExamsBundle\\Controller\\GradeController::readAction',  '_route' => 'affichebackgrades',);
                }

            }

            elseif (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_security_login;
                    }

                    return $ret;
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_fos_user_security_check;
                    }

                    return $ret;
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_logout;
                }

                return $ret;
            }
            not_fos_user_security_logout:

        }

        // bin_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'BinBundle\\Controller\\DefaultController::indexAction',  '_route' => 'bin_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_bin_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'bin_homepage'));
            }

            return $ret;
        }
        not_bin_homepage:

        if (0 === strpos($pathinfo, '/teacher')) {
            // binaddabs
            if ('/teacher/addabscense' === $pathinfo) {
                return array (  '_controller' => 'BinBundle\\Controller\\abscenseController::addAction',  '_route' => 'binaddabs',);
            }

            // binaddot
            if ('/teacher/addnotification' === $pathinfo) {
                return array (  '_controller' => 'BinBundle\\Controller\\notificationController::addAction',  '_route' => 'binaddot',);
            }

            if (0 === strpos($pathinfo, '/teacher/delete')) {
                // deleteabs
                if (0 === strpos($pathinfo, '/teacher/deleteabscense') && preg_match('#^/teacher/deleteabscense/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteabs']), array (  '_controller' => 'BinBundle\\Controller\\abscenseController::deleteAction',));
                }

                // deletenot
                if (0 === strpos($pathinfo, '/teacher/deletenotification') && preg_match('#^/teacher/deletenotification/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'deletenot']), array (  '_controller' => 'BinBundle\\Controller\\notificationController::deleteAction',));
                }

                // deletegrades
                if (0 === strpos($pathinfo, '/teacher/deleteg') && preg_match('#^/teacher/deleteg/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'deletegrades']), array (  '_controller' => 'ExamsBundle\\Controller\\GradeController::deleteAction',));
                }

                // delete-course
                if (0 === strpos($pathinfo, '/teacher/delete-course') && preg_match('#^/teacher/delete\\-course/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete-course']), array (  '_controller' => 'CourseBundle\\Controller\\CourseController::deleteAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/teacher/update')) {
                // updateabs
                if (0 === strpos($pathinfo, '/teacher/updateabscense') && preg_match('#^/teacher/updateabscense/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'updateabs']), array (  '_controller' => 'BinBundle\\Controller\\abscenseController::updateAction',));
                }

                // updatenot
                if (0 === strpos($pathinfo, '/teacher/updatenotification') && preg_match('#^/teacher/updatenotification/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'updatenot']), array (  '_controller' => 'BinBundle\\Controller\\notificationController::updateAction',));
                }

                // updategrades
                if (0 === strpos($pathinfo, '/teacher/updateg') && preg_match('#^/teacher/updateg/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'updategrades']), array (  '_controller' => 'ExamsBundle\\Controller\\GradeController::updateAction',));
                }

                // update-course
                if (0 === strpos($pathinfo, '/teacher/update-course') && preg_match('#^/teacher/update\\-course/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'update-course']), array (  '_controller' => 'CourseBundle\\Controller\\CourseController::updateAction',));
                }

            }

            // searchnot
            if ('/teacher/searchnotifiication' === $pathinfo) {
                return array (  '_controller' => 'BinBundle\\Controller\\notificationController::searchAction',  '_route' => 'searchnot',);
            }

            // creategrades
            if ('/teacher/creategrades' === $pathinfo) {
                return array (  '_controller' => 'ExamsBundle\\Controller\\GradeController::createAction',  '_route' => 'creategrades',);
            }

            // create-course
            if ('/teacher/create-course' === $pathinfo) {
                return array (  '_controller' => 'CourseBundle\\Controller\\CourseController::createAction',  '_route' => 'create-course',);
            }

        }

        // course_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'CourseBundle\\Controller\\DefaultController::indexAction',  '_route' => 'course_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_course_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'course_homepage'));
            }

            return $ret;
        }
        not_course_homepage:

        // view-course
        if (0 === strpos($pathinfo, '/view-course') && preg_match('#^/view\\-course/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'view-course']), array (  '_controller' => 'CourseBundle\\Controller\\CourseController::viewAction',));
        }

        // view-subject
        if (0 === strpos($pathinfo, '/view-subject') && preg_match('#^/view\\-subject/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'view-subject']), array (  '_controller' => 'CourseBundle\\Controller\\SubjectController::viewAction',));
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        // backback
        if ('/backback' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::backAction',  '_route' => 'backback',);
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
