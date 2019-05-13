<template>
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                            <li class="m-nav__item m-nav__item--home">
                                <a href="" class="m-nav__link m-nav__link--icon">
                                    <i class="m-nav__link-icon la la-home"></i>
                                </a>
                            </li>
                            <li class="m-nav__item">
                                <a href="" class="m-nav__link">
                                    <span class="m-nav__link-text">Home</span>
                                </a>
                            </li>
                            <li class="m-nav__separator">-</li>
                            <li class="m-nav__item">
                                <a href="" class="m-nav__link">
                                    <span class="m-nav__link-text">All Users</span> 
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="m-content">
                <div class="m-portlet m-portlet--mobile">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        All Users  
                                    </h3>
                                </div>
                            </div>
                            <div class="m-portlet__head-tools">
                                <ul class="m-portlet__nav">
                                    <li class="m-portlet__nav-item">
                                        <button class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air" data-toggle="modal" data-target="#m_modal_1">
                                            <span>
                                                <i class="la la-plus"></i>
                                                <span>Add New</span>
                                            </span>
                                        </button>
                                    </li>
                                    <li class="m-portlet__nav-item"></li>
                                    <li class="m-portlet__nav-item">
                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                            <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                                <i class="la la-ellipsis-h m--font-brand"></i>
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                <div class="m-dropdown__inner">
                                                    <div class="m-dropdown__body">
                                                        <div class="m-dropdown__content">
                                                            <ul class="m-nav">
                                                                <li class="m-nav__section m-nav__section--first">
                                                                    <span class="m-nav__section-text">Quick Actions</span>
                                                                </li>
                                                                <br>

                                                                <li class="m-nav__item">
                                                                    <a href="" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                                        <span class="m-nav__link-text">Delete All</span>
                                                                    </a>
                                                                </li>

                                                                <li class="m-nav__item">
                                                                    <a href="" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                                        <span class="m-nav__link-text">Un Active All</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="m-portlet__body">

                            <!--begin: Datatable -->
                            <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                                <thead>
                                    <tr>
                                        <th>
                                            <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                <input type="checkbox">
                                                <span></span>
                                            </label>
                                        </th>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Image</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                            <tr>
                                                <td>
                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                        <input type="checkbox">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>1</td>
                                                <td>ff</td>
                                                <td>ff@gnmail</td>
                                                <td>01012775704</td>
                                                <td>
                                                    <img src="" style="width:50px;height:50px;border-radius:50%;"/>
                                                </td>
                                                <td>
                                                    <!-- @if ($user->user['role_id'] == 1)
                                                            <span class="m-badge  m-badge--primary m-badge--wide">{{ trans('app.Admin') }}</span>
                                                        @elseif($user->user['role_id'] == 2)
                                                            <span class="m-badge  m-badge--info m-badge--wide">{{ trans('app.Supervisor') }}</span>
                                                        @elseif($user->user['role_id'] == 3)
                                                            <span class="m-badge  m-badge--primary m-badge--wide">{{ trans('app.Writer') }}</span>
                                                        @elseif($user->user['role_id'] == 4)
                                                            <span class="m-badge  m-badge--success m-badge--wide">{{ trans('app.Editor') }}</span>
                                                        @else
                                                            <span class="m-badge  m-badge--metal m-badge--wide">{{ trans('app.Default User') }}</span>
                                                    @endif -->
                                                    default
                                                </td>
                                                <td>
                                                    <!-- @if ($user->user['status'] == 1)
                                                        <span class="m-badge  m-badge--success m-badge--wide">{{ trans('app.Active') }}</span>
                                                    @else
                                                        <span class="m-badge  m-badge--danger m-badge--wide">{{ trans('app.Not Active') }}</span>
                                                    @endif -->

                                                    active
                                                </td>
                                                <td>                                                    
                                                    <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="Edit">
                                                        <i class="la la-edit"></i>
                                                    </a>
                                                    
                                                    <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                                                        <i class="la la-eye"></i>
                                                    </a>

                                                    <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">
                                                        <i class="la la-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                    </tbody>
                            </table>
                        </div>
                </div>
            </div>

            <Form></Form>
        </div>
</template>

<script>
    import Form from "./Form.vue"

    export default {
        mounted() {
            console.log('Component mounted.')
        }, 
        components: {Form}
    }
</script>

