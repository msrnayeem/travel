@extends('frontend.layouts.frontend')

@section('title', 'Travel World || Create Package')

@section('content')


    <style>
        .row+.row {
            margin-top: 0;
        }

        .parent {
            display: grid;
            grid-template-areas: "left left right";
            position: relative;
            gap: 1.5rem;
        }

        .left {
            grid-area: left;
            background-color: #d251cc;
            padding: 1rem;
            height: max-content;
        }

        @media (max-width: 40rem) {
            .parent {
                grid-template-areas: "left left left"
                    "right right right";
            }
        }

        .right {
            grid-area: right;
            flex: 1;
            background-color: #623f60;
            padding: 1rem;
        }

        .sticky {
            position: sticky;
            height: max-content;
            top: 65px;
        }

        .circle {
            display: inline-block;
            height: 56px;
            width: 56px;
            border-radius: 50%;
            text-align: center;
            font-size: 11px;
            line-height: 56px;
            font-weight: 700;
            border: solid 2px #ccc;
            transition: all 0.3s;
            color: black;
        }

        input[type="radio"],
        input[type="checkbox"] {
            display: none;
        }

        input[type="radio"]:hover+label,
        input[type="checkbox"]:hover+label {
            background-color: #ffa900;
        }

        input[type="radio"]:checked+label,
        input[type="checkbox"]:checked+label {
            background-color: #ffa900;
        }

        .sbmt {
            background-color: #ffa900;
            color: rgb(0, 0, 0);
        }

        .sbmt:hover {
            background-color: #d251cc;
            color: rgb(0, 0, 0);
        }
    </style>


    <div class="parent">
        <div class="left">
            <div class="col-12 col-lg-8 mb-0 ml-4">
                <div class="row d-flex align-items-center">
                    <div class="col-md-5 col-sm-12 m-0">
                        <div class="col-12">
                            <h3 style="font-size:22px; font-weight:500; font-color:black;">Planning for ?</h3>
                        </div>
                        <div class="col-12 d-none d-sm-block">
                            <p>Hajj</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 m-0">
                        <div class="row options p-3">
                            <div class="col-3">
                                <input type="radio" id="hajj" name="category" value="hajj" checked>
                                <label class="circle" for="hajj">Hajj</label>
                            </div>
                            <div class="col-3">
                                <input type="radio" id="umrah" name="category" value="umrah">
                                <label class="circle" for="umrah">Umra</label>
                            </div>
                            <div class="col-3">
                                <input type="radio" id="tour" name="category" value="tour">
                                <label class="circle" for="tour">Tour</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row d-flex align-items-center">
                    <div class="col-md-5 col-sm-12 m-0">
                        <div class="col-12">
                            <h3 style="font-size:22px; font-weight:500; font-color:black;">Time period-</h3>
                        </div>
                        <div class="col-12 d-none d-sm-block">
                            <p>07 days</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 m-0">
                        <div class="row options p-3">
                            <div class="col-3">
                                <input type="radio" id="3" name="time" value="3">
                                <label class="circle" for="3">3 days</label>
                            </div>
                            <div class="col-3">
                                <input type="radio" id="7" name="time" value="7" checked>
                                <label class="circle" for="7">7 days</label>
                            </div>
                            <div class="col-3">
                                <input type="radio" id="15" name="time" value="15">
                                <label class="circle" for="15">15 days</label>
                            </div>
                            <div class="col-3">
                                <input type="radio" id="30" name="time" value="30">
                                <label class="circle" for="30">30 days</label>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row d-flex align-items-center">
                    <div class="col-md-5 m-0">
                        <div class="col-12">
                            <h3 style="font-size:22px; font-weight:500; font-color:black;">Passport processing by-</h3>
                        </div>
                        <div class="col-12 d-none d-sm-block">
                            <p>Agency</p>
                        </div>
                    </div>
                    <div class="col-md-6 m-0">
                        <div class="row options p-3">
                            <div class="col-3">
                                <input type="radio" id="passport_self" name="passport" value="self">
                                <label class="circle" for="passport_self">Self</label>
                            </div>
                            <div class="col-3">
                                <input type="radio" id="passport_agency" name="passport" value="agency" checked>
                                <label class="circle" for="passport_agency">Agency</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row d-flex align-items-center">
                    <div class="col-md-5 col-sm-12 m-0">
                        <div class="col-12">
                            <h3 style="font-size:22px; font-weight:500; font-color:black;">Visa processing by-</h3>
                        </div>
                        <div class="col-12 d-none d-sm-block">
                            <p>Agency</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 m-0">
                        <div class="row options p-3">
                            <div class="col-3">
                                <input type="radio" id="visa_self" name="visa" value="selt">
                                <label class="circle" for="visa_self">Self</label>
                            </div>
                            <div class="col-3">
                                <input type="radio" id="visa_agency" name="visa" value="agency" checked>
                                <label class="circle" for="visa_agency">Agency</label>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row d-flex align-items-center">
                    <div class="col-md-5 col-sm-12 m-0">
                        <div class="col-12">
                            <h3 style="font-size:22px; font-weight:500; font-color:black;">Hotel category-</h3>
                        </div>
                        <div class="col-12 d-none d-sm-block">
                            <p>3-Star</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 m-0">
                        <div class="row options p-3">
                            <div class="col-3">
                                <input type="radio" id="hotel_0" name="hotel" value="Non-Star">
                                <label class="circle" for="hotel_0">Non-Star</label>
                            </div>
                            <div class="col-3">
                                <input type="radio" id="hotel_3" name="hotel" value="3-Star" checked>
                                <label class="circle" for="hotel_3">3-Star</label>
                            </div>
                            <div class="col-3">
                                <input type="radio" id="hotel_5" name="hotel" value="5-star">
                                <label class="circle" for="hotel_5">5-star</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row d-flex align-items-center">
                    <div class="col-md-5 col-sm-12 m-0">
                        <div class="col-12">
                            <h3 style="font-size:22px; font-weight:500; font-color:black;">Food-</h3>
                        </div>
                        <div class="col-12 d-none d-sm-block">
                            <p>Dinner</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 m-0">
                        <div class="row options p-3">
                            <div class="col-3">
                                <input type="checkbox" id="breakfast" name="food" value="breakfast">
                                <label class="circle" for="breakfast">Breakfast</label>
                            </div>
                            <div class="col-3">
                                <input type="checkbox" id=lunch" name="food" value="lunch">
                                <label class="circle" for=lunch">Lunch</label>
                            </div>
                            <div class="col-3">
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
                <div class="row d-flex align-items-center">
                    <div class="col">
                        <h5> Type- <span id="type">Tour</span> </h5>
                    </div>
                </div>
                <div class="row d-flex align-items-center">
                    <div class="col">
                        <h5> Time- <span id="type">Tour</span> </h5>
                    </div>
                </div>
                <div class="row d-flex align-items-center">
                    <div class="col">
                        <h5> Passport- <span id="type">Tour</span> </h5>
                    </div>
                </div>
                <div class="row d-flex align-items-center">
                    <div class="col">
                        <h5> Visa- <span id="type">Tour</span> </h5>
                    </div>
                </div>
                <div class="row d-flex align-items-center">
                    <div class="col">
                        <h5> Hotel- <span id="type">Tour</span> </h5>
                    </div>
                </div>
                <div class="row d-flex align-items-center">
                    <div class="col">
                        <h5> Food- <span id="type">Tour</span> </h5>
                    </div>
                </div>
                <div class="row d-flex align-items-center">
                    <div class="col">
                        <button class="btn sbmt" type="submit">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
