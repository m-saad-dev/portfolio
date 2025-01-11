<div class="table-responsive">
    <!--begin::Table-->
    <table class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9" style="max-width: inherit !important;">
        <!--begin::Thead-->
        <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
            <tr>
                <th>#</th>
                <th> Name </th>
                <th style="padding-left: 30px"> Email </th>
                <th style="padding-left: 30px"> Subject </th>
                <th style="padding-left: 30px"> Message Body </th>
                <th class="min-w-150px">Actions</th>
            </tr>
        </thead>
        <!--end::Thead-->
        <!--begin::Tbody-->
        <tbody class="fw-6 fw-semibold text-gray-600" style="max-width: inherit !important;">
            @foreach($messages as $message)
            <tr>
                <td class="min-w-70px  mr-3">
                    <span class="badge badge-light-success">{{$loop->iteration}}</span>
                </td>
                <td class="w-25">
                    <p href="javascript::void(0);" class=" text-left text-gray-600">{{$message->name}}</p>
                </td>
                <td style="padding-left: 30px">
                    <p href="javascript::void(0);" class=" text-left text-gray-600">{{$message->email}}</p>
                </td>
                <td style="padding-left: 30px" class="w-25">
                    <p href="javascript::void(0);" class=" text-left text-gray-600">{{$message->subject}}</p>
                </td>
                <td  class="w-50" style="padding-left: 30px">
                    <p href="javascript::void(0);" class="text-left text-gray-600">{{$message->message_body}}</p>
                </td>
                <td class="text-start">
                    <!--begin::Actions-->
                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">actions
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                        <span class="svg-icon svg-icon-5 m-0">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </a>
                    
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4 justify-content-center align-center" data-kt-menu="true">
                        <!--begin::Menu item-->
                        <form method="post" id="my_form" class="menu-item px-3" action="{{route('admin.messages.destroy', $message->id)}}">
                            @csrf @method('Delete')
                            <a role="button" href="javascript::void();" onclick="this.closest('form').submit()" methods='DELETE' class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">delete</a>
                        </form>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Actions-->
                </td>
            </tr>
            @endforeach
        </tbody>
        <!--end::Tbody-->
    </table>
    <!--end::Table-->
</div>
