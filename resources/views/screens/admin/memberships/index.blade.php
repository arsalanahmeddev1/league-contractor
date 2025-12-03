@section('title', 'All Users')
@extends('layouts.admin.master')
@section('content')
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-body bottom-border-tab">
                    <ul class="nav nav-pills nav-primary" id="j-pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="j-pills-web-designer-tab" data-bs-toggle="pill"
                                href="#j-pills-web-designer" role="tab" aria-controls="j-pills-web-designer"
                                aria-selected="true">
                                Web designer
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="j-pills-UX-designer-tab" data-bs-toggle="pill"
                                href="#j-pills-UX-designer" role="tab" aria-controls="j-pills-UX-designer"
                                aria-selected="false">
                                UX designer
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="j-pills-IOT-developer-tab" data-bs-toggle="pill"
                                href="#j-pills-IOT-developer" role="tab" aria-controls="j-pills-IOT-developer"
                                aria-selected="false">
                                IOT developer
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="topline-tabContent">
                        <div class="tab-pane fade show active" id="topline-top-user" role="tabpanel"
                            aria-labelledby="topline-top-user-tab">
                            <div class="card-body px-0 pb-0">
                                <div class="user-header pb-2">
                                    <h6 class="fw-bold">User Details:</h6>
                                </div>
                                <div class="user-content">
                                    <div class="table-responsive custom-scrollbar">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Country</th>
                                                    <th scope="col">Contact No</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Neha</td>
                                                    <td>India</td>
                                                    <td>5698741236</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacklin</td>
                                                    <td>Thailand</td>
                                                    <td>7800030320</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="topline-top-description" role="tabpanel"
                            aria-labelledby="topline-top-description-tab">
                            <div class="card-body px-0 pb-0">
                                <div class="user-header pb-2">
                                    <h6 class="fw-bold">Description:</h6>
                                </div>
                                <div class="user-content">
                                    <div class="table-responsive custom-scrollbar">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Technology</th>
                                                    <th scope="col">Interests</th>
                                                    <th scope="col">Salary Expected</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Web Designer</td>
                                                    <td>HTML,CSS,JS,SCSS</td>
                                                    <td>45000</td>
                                                </tr>
                                                <tr>
                                                    <td>UX Designer</td>
                                                    <td>Figma,Photoshop,Sketch</td>
                                                    <td>20000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="topline-top-review" role="tabpanel"
                            aria-labelledby="topline-top-review-tab">
                            <div class="card-body px-0 pb-0">
                                <div class="user-header pb-2">
                                    <h6 class="fw-bold">Review:</h6>
                                </div>
                                <div class="user-content">
                                    <div class="table-responsive custom-scrollbar">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Country</th>
                                                    <th scope="col">Rating</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Neha</td>
                                                    <td>India</td>
                                                    <td>
                                                        <i class="ico-color icofont icofont-star"></i>
                                                        <i class="ico-color icofont icofont-star"></i>
                                                        <i class="ico-color icofont icofont-star"></i>
                                                        <i class="ico-color icofont icofont-star"></i>
                                                        <i class="ico-color icofont icofont-star"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Irfan</td>
                                                    <td>India</td>
                                                    <td>
                                                        <i class="ico-color icofont icofont-star"></i>
                                                        <i class="ico-color icofont icofont-star"></i>
                                                        <i class="ico-color icofont icofont-star"></i>
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
@endsection
