@section('title', 'All Contractors')
@extends('layouts.admin.master')
@section('content')
    <div class="container-fluid user-list-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-no-border text-end">
                        <div class="card-header-right-icon">
                            <a class="btn btn-primary f-w-500" href="{{ route('contractors.create') }}"><i
                                    class="fa-solid fa-plus pe-2"></i>Add
                                Contractor</a>
                        </div>
                    </div>
                    <div class="card-body pt-0 px-0">
                        <div class="list-product user-list-table">
                            <div class="table-responsive custom-scrollbar">
                                <table class="table" id="contractors-table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <span class="c-o-light f-w-600">Name</span>
                                            </th>
                                            <th>
                                                <span class="c-o-light f-w-600">Email</span>
                                            </th>
                                            <th>
                                                <span class="c-o-light f-w-600">Company</span>
                                            </th>
                                            <th>
                                                <span class="c-o-light f-w-600">Phone</span>
                                            </th>
                                            <th>
                                                <span class="c-o-light f-w-600">Status</span>
                                            </th>
                                            <th>
                                                <span class="c-o-light f-w-600">Creation Date</span>
                                            </th>
                                            <th>
                                                <span class="c-o-light f-w-600">Actions</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="product-removes inbox-data">
                                            <td><a href="#!">John Contractor</a></td>
                                            <td>
                                                <p>john@contractor.com</p>
                                            </td>
                                            <td>
                                                <p>ABC Construction</p>
                                            </td>
                                            <td>
                                                <p>+1 234-567-8900</p>
                                            </td>
                                            <td><span class="badge badge-light-success">Active</span></td>
                                            <td>
                                                <p>15 Jan 2024, 10:30 AM</p>
                                            </td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start">
                                                    <a class="square-white" href="#!">
                                                        <span><i class="fa-solid fa-eye"></i></span>
                                                    </a>
                                                    <a class="square-white" href="#!">
                                                        <span><i class="fa-solid fa-pen"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td><a href="#!">Jane Builder</a></td>
                                            <td>
                                                <p>jane@builder.com</p>
                                            </td>
                                            <td>
                                                <p>XYZ Builders</p>
                                            </td>
                                            <td>
                                                <p>+1 234-567-8901</p>
                                            </td>
                                            <td><span class="badge badge-light-success">Active</span></td>
                                            <td>
                                                <p>20 Jan 2024, 02:15 PM</p>
                                            </td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start">
                                                    <a class="square-white" href="#!">
                                                        <span><i class="fa-solid fa-eye"></i></span>
                                                    </a>
                                                    <a class="square-white" href="#!">
                                                        <span><i class="fa-solid fa-pen"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td><a href="#!">Mike Developer</a></td>
                                            <td>
                                                <p>mike@developer.com</p>
                                            </td>
                                            <td>
                                                <p>DEF Developers</p>
                                            </td>
                                            <td>
                                                <p>+1 234-567-8902</p>
                                            </td>
                                            <td><span class="badge badge-light-warning">Pending</span></td>
                                            <td>
                                                <p>25 Jan 2024, 11:45 AM</p>
                                            </td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start">
                                                    <a class="square-white" href="#!">
                                                        <span><i class="fa-solid fa-eye"></i></span>
                                                    </a>
                                                    <a class="square-white" href="#!">
                                                        <span><i class="fa-solid fa-pen"></i></span>
                                                    </a>
                                                </div>
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
@endsection

