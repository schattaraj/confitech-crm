@extends('layouts.admin')
@section('content')
                <a href="{{route('apply-leave')}}" class="btn btn-primary">Apply Leave</a>
                <div class="row">
                  <div class="col-md-3">
                    <div class="card">
                    <h4>Paid Leave</h4>
                    <i class="fa-solid fa-calendar-days"></i>
                    <h5>Available <span>:{{$employee_leave != null ? explode(',',$employee_leave->leaves_available)[0] : "0"}}</span></h5>
                    {{-- <h5>Booked <span>:0</span></h5> --}}
                  </div>
                </div>
                  <div class="col-md-3"><div class="card green">
                    <h4>Casual Leave</h4>
                    <i class="fa-solid fa-calendar-days"></i>
                    <h5>Available <span>:{{$employee_leave != null ? explode(',',$employee_leave->leaves_available)[1] : "0"}}</span></h5>
                    {{-- <h5>Booked <span>:0</span></h5> --}}
                  </div></div>
                  <div class="col-md-3"><div class="card yellow">
                    <h4>Sick Leave</h4>
                    <i class="fa-solid fa-stethoscope"></i>
                    <h5>Available <span>:{{$employee_leave != null ? explode(',',$employee_leave->leaves_available)[2] : "0"}}</span></h5>
                    {{-- <h5>Booked <span>:0</span></h5> --}}
                  </div></div>
                  <div class="col-md-3"><div class="card purple">
                    <h4>Complementory off</h4>
                    <i class="fa-solid fa-clock"></i>
                    <h5>Available <span>:{{$employee_leave != null ? explode(',',$employee_leave->leaves_available)[3] : "0"}}</span></h5>
                    {{-- <h5>Booked <span>:0</span></h5> --}}
                  </div></div>
                </div>
                <div class="holiday-list">

                </div>
                <div class="table-responsive mt-3">
                  <h4>Annual Holidays</h4>
                    <table class="table">
                        <thead>
                            <tr>
                              <th scope="col">Date</th>
                              <th scope="col">Day</th>
                              <th scope="col">Holiday</th>
                            </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>1 January 2023</td>
                                  <td>Sunday</td>
                                  <td>New Year's Day</td>
                              </tr>
                              <tr>
                                <td>3 January 2023</td>
                                <td>Monday</td>
                                <td>New Year Holiday</td>
                            </tr>
                            <tr>
                                <td>4 January 2023</td>
                                <td>Monday</td>
                                <td>New Year Holiday</td>
                            </tr>
                            <tr>
                                <td>5 January 2023</td>
                                <td>Monday</td>
                                <td>New Year Holiday</td>
                            </tr>
                          </tbody>
                    </table>
                  </div>
@endsection