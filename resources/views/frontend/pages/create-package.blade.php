@extends('frontend.layouts.frontend')

@section('title', 'Travel World || Create Package')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/create-package.css') }}">
@endpush

@section('content')
    <div class="parent">
        <div class="left">
            <div class="mb-0 ml-4">

                <div class="row d-flex align-items-center">
                    <div class="col-md-5 col-sm-12 m-0">
                        <div>
                            <h3 style="font-size:22px; font-weight:500; font-color:black;">Planning for ?</h3>
                        </div>
                        <div class="d-none d-sm-block">
                            <p>Hajj</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 m-0">
                        <div class="p-3 d-flex">
                            <div class="mr-2">
                                <input type="radio" id="hajj" name="category" value="hajj" checked>
                                <label class="circle" for="hajj">Hajj</label>
                            </div>

                            <div class="mr-2">
                                <input type="radio" id="umrah" name="category" value="umrah">
                                <label class="circle" for="umrah">Umra</label>
                            </div>

                            <div class="mr-2">
                                <input type="radio" id="tour" name="category" value="tour">
                                <label class="circle" for="tour">Tour</label>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row d-flex align-items-center">
                    <div class="col-md-5 col-sm-12 m-0">
                        <div>
                            <h3 style="font-size:22px; font-weight:500; font-color:black;">Time period-</h3>
                        </div>
                        <div class="d-none d-sm-block">
                            <p>07 days</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 m-0">
                        <div class="p-3 d-flex">
                            <div class="mr-2">
                                <input type="radio" id="3" name="time" value="3">
                                <label class="circle" for="3">3 days</label>
                            </div>

                            <div class="mr-2">
                                <input type="radio" id="7" name="time" value="7" checked>
                                <label class="circle" for="7">7 days</label>
                            </div>

                            <div class="mr-2">
                                <input type="radio" id="15" name="time" value="15">
                                <label class="circle" for="15">15 days</label>
                            </div>

                            <div class="mr-2">
                                <input type="radio" id="30" name="time" value="30">
                                <label class="circle" for="30">30 days</label>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row d-flex align-items-center mb-3">
                    <div class="col-md-5 col-sm-12 m-0">
                        <div>
                            <h3 style="font-size:22px; font-weight:500; font-color:black;">Passport processing by-</h3>
                        </div>
                        <div class="d-none d-sm-block">
                            <p>Ajency</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 m-0">
                        <div class="p-3 d-flex">
                            <div class="mr-2">
                                <input type="radio" id="passport_self" name="passport" value="self">
                                <label class="circle" for="passport_self">Self</label>
                            </div>

                            <div class="mr-2">
                                <input type="radio" id="passport_agency" name="passport" value="agency" checked>
                                <label class="circle" for="passport_agency">Agency</label>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="row d-flex align-items-center">
                    <div class="col-md-5 col-sm-12 m-0">
                        <div>
                            <h3 style="font-size:22px; font-weight:500; font-color:black;">Visa processing by-</h3>
                        </div>
                        <div class="d-none d-sm-block">
                            <p>Ajency</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 m-0">
                        <div class="p-3 d-flex">
                            <div class="mr-2">
                                <input type="radio" id="visa_self" name="visa" value="selt">
                                <label class="circle" for="visa_self">Self</label>
                            </div>

                            <div class="mr-2">
                                <input type="radio" id="visa_agency" name="visa" value="agency" checked>
                                <label class="circle" for="visa_agency">Agency</label>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row d-flex align-items-center">
                    <div class="col-md-5 col-sm-12 m-0">
                        <div>
                            <h3 style="font-size:22px; font-weight:500; font-color:black;">Hotel category-</h3>
                        </div>
                        <div class="d-none d-sm-block">
                            <p>3-Star</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 m-0">
                        <div class="p-3 d-flex">
                            <div class="mr-2">
                                <input type="radio" id="hotel_0" name="hotel" value="Non-Star">
                                <label class="circle" for="hotel_0">Non-Star</label>
                            </div>

                            <div class="mr-2">
                                <input type="radio" id="hotel_3" name="hotel" value="3-Star" checked>
                                <label class="circle" for="hotel_3">3-Star</label>
                            </div>

                            <div class="mr-2">
                                <input type="radio" id="hotel_5" name="hotel" value="5-star">
                                <label class="circle" for="hotel_5">5-star</label>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row d-flex align-items-center">
                    <div class="col-md-5 col-sm-12 m-0">
                        <div>
                            <h3 style="font-size:22px; font-weight:500; font-color:black;">Food-</h3>
                        </div>
                        <div class="d-none d-sm-block">
                            <p>Dinner</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 m-0">
                        <div class="p-3 d-flex">
                            <div class="mr-2">
                                <input type="checkbox" id="breakfast" name="food" value="breakfast">
                                <label class="circle" for="breakfast">Breakfast</label>
                            </div>

                            <div class="mr-2">
                                <input type="checkbox" id="lunch" name="food" value="lunch">
                                <label class="circle" for="lunch">Lunch</label>
                            </div>

                            <div class="mr-2">
                                <input type="checkbox" id="dinner" name="food" value="dinner" checked>
                                <label class="circle" for="dinner">Dinner</label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="right sticky">
            <div class="col-12 col-lg-4">
                <table class="table">
                    <tr>
                        <th>Type:</th>
                        <td><span id="type">Tour</span></td>
                    </tr>
                    <tr>
                        <th>Time:</th>
                        <td><span id="time">7 Days</span></td>
                    </tr>
                    <tr>
                        <th>Passport:</th>
                        <td><span id="passport">Agency</span></td>
                    </tr>
                    <tr>
                        <th>Visa:</th>
                        <td><span id="visa">Agency</span></td>
                    </tr>
                    <tr>
                        <th>Hotel:</th>
                        <td><span id="hotel">3 Star</span></td>
                    </tr>
                    <tr>
                        <th>Meal:</th>
                        <td><span id="meal">lunch, dinner</span></td>
                    </tr>
                    <tr>
                        <th>Total:</th>
                        <td><span id="meal">$10000</span></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button class="btn sbmt" type="submit">Book Now</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

@endsection
