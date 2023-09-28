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
                            <p class="text-capitalize category">Hajj</p>
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
                                <label class="circle" for="umrah">Umrah</label>
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
                            <p><span class="time">07</span> Days</p>
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
                            <p class="text-capitalize passport">Ajency</p>
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
                            <p class="text-capitalize visa">Ajency</p>
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
                            <p class="text-capitalize hotel">3-Star</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 m-0">
                        <div class="p-3 d-flex">
                            <div class="mr-2">
                                <input type="radio" id="hotel_0" name="hotel" value="Regular">
                                <label class="circle" for="hotel_0">Regular</label>
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
                            <p class="text-capitalize food">Dinner</p>
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
                        <td><span class="text-capitalize category">Hajj</span></td>
                    </tr>
                    <tr>
                        <th>Time:</th>
                        <td><span style="font-size: 15px;"><span class="time">07</span> Days</span></td>
                    </tr>
                    <tr>
                        <th>Passport:</th>
                        <td><span class="text-capitalize passport">Agency</span></td>
                    </tr>
                    <tr>
                        <th>Visa:</th>
                        <td><span class="text-capitalize visa">Agency</span></td>
                    </tr>
                    <tr>
                        <th>Hotel:</th>
                        <td><span class="text-capitalize hotel">3 Star</span></td>
                    </tr>
                    <tr>
                        <th>Meal:</th>
                        <td><span class="food">lunch, dinner</span></td>
                    </tr>
                    <tr>
                        <th>Total:</th>
                        <td><span id="cost">$10000</span></td>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('input[type="radio"]').change(function() {

                var name = $(this).attr('name');
                var selectedValue = $(this).val();

                var characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                var animationInterval = setInterval(function() {
                    var shuffledText = '';
                    for (var i = 0; i < selectedValue.length; i++) {
                        shuffledText += characters.charAt(Math.floor(Math.random() * characters
                            .length));
                    }
                    $('.' + name).text(shuffledText);
                }, 50);

                setTimeout(function() {
                    clearInterval(animationInterval);
                    $('.' + name).text(selectedValue);
                }, 500);
            });
        });
        $(document).ready(function() {
            // Function to shuffle a string
            function shuffleString(str) {
                var array = str.split('');
                for (var i = array.length - 1; i > 0; i--) {
                    var j = Math.floor(Math.random() * (i + 1));
                    var temp = array[i];
                    array[i] = array[j];
                    array[j] = temp;
                }
                // Limit the shuffled text to 20 characters
                return array.slice(0, 10).join('');
            }

            // Attach an onchange event handler to the checkboxes
            $('input[type="checkbox"]').change(function() {
                // Get the name of the checkbox group
                var groupName = $(this).attr('name');

                // Get all checked values within the same group
                var checkedValues = $('input[name="' + groupName + '"]:checked').map(function() {
                    return $(this).val();
                }).get();

                // Update the corresponding <p> element with the checked values with shuffle animation
                var $pElement = $('.' + groupName);
                var originalText = $pElement.text();
                var shuffledText = shuffleString(originalText);

                // Apply shuffle animation
                var interval = setInterval(function() {
                    $pElement.text(shuffleString($pElement.text()));
                }, 50); // Adjust the interval as needed for the desired speed

                setTimeout(function() {
                    clearInterval(interval);
                    $pElement.text(checkedValues.join(', '));
                }, 500); // Adjust the duration of the shuffle animation as needed (500ms in this example)
            });
        });
    </script>






@endsection
