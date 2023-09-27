@extends('frontend.layouts.frontend')

@section('title', 'Travel World || Own Package')

@section('content')
    {{-- <style>
        body {
            background-color: #f1f1f1;
        }

        .rb-box {
            width: 80%;
            max-width: 500px;
            margin: 50px auto;
            padding: 1.3em;
            background: #f0f0f0;
            color: black;
            font-weight: 700;
            border-radius: .75em;
            -webkit-filter: drop-shadow(1px 2px 5px rgba(0, 0, 0, .3));
            filter: drop-shadow(1px 2px 5px rgba(0, 0, 0, .3));
            box-shadow:
                0 2px 2px rgba(243, 49, 128, .5),
                0 0px 5px rgba(243, 49, 128, .15),
                0 0px 4px rgba(0, 0, 0, .35),
                0 5px 20px rgba(243, 49, 128, .25),
                0 15px 50px rgba(243, 49, 128, .75),
                inset 0 0 15px rgba(255, 255, 255, .05);
        }

        .box {
            display: inline-block;
            height: 50px;
            border-radius: 10%;
            padding: 8px 8px;
            border: solid 2px #ccc;
            transition: all 0.3s;
            margin-left: 30px;
        }

        .circle {
            display: inline-block;
            height: 50px;
            width: 50px;
            border-radius: 50%;
            padding: 12px;
            border: solid 2px #ccc;
            transition: all 0.3s;
            margin-left: 30px;
        }

        .boxed input[type="radio"] {
            display: none;

        }

        .boxed input[type="radio"]:checked+label {
            border: solid 2px green;
            background-color: ivory;
        }

        }
    </style> --}}

    <style>
        .header {
            height: 300px;
            background: red;
        }

        /* code for sticky section */
        .sectionA {
            position: relative;
            display: flex;
            padding-left: 20px;
            padding-right: 20px;
        }

        .sectionA .right {
            position: sticky;
            top: 0;
            height: 200px;
            background: tomato;
            width: 50%;
        }

        /* code for sticky section */



        .sectionA .left {
            height: 1000px;
            background: green;
            width: 50%;
            overflow: hidden;
        }

        .sectionB {
            height: 300px;
            background: yellow;
        }
    </style>
    {{-- <div class="container mt-2 mb-4">
         <div class="row">
            <div class="col-md-8">
                <form class="boxed">
                    <div class="p-2 mb-1">
                        <h5>Select your category</h5>
                        <div class="ml-4 mt-2">
                            <input type="radio" id="hajj" name="category" value="hajj">
                            <label class="box" for="hajj">Hajj</label <input type="radio" id="umrah"
                                name="category" value="umrah">
                            <label class="box" for="umrah">Umra</label>

                            <input type="radio" id="tour" name="category" value="tour">
                            <label class="box" for="tour">Tour</label>
                        </div>
                    </div>
                    <div class="p-2 mb-1">
                        <h5>who is going to process passport?</h5>
                        <div class="ml-4 mt-2">
                            <input type="radio" id="self" name="passport" value="self">
                            <label class="box" for="self">Self</label>

                            <input type="radio" id="agency" name="passport" value="agency">
                            <label class="box" for="agency">agency</label>
                        </div>
                    </div>
                    <div class="p-2 mb-1">
                        <h5>who is going to proess visa?</h5>
                        <div class="ml-4 mt-2">
                            <input type="radio" id="visa_self" name="visa" value="self">
                            <label class="box" for="visa_self">Self</label>

                            <input type="radio" id="visa_agency" name="visa" value="agency">
                            <label class="box" for="visa_agency">agency</label>
                        </div>
                    </div>

                    <div class="p-2 mb-1">
                        <h5>For how many days?</h5>
                        <div class="ml-4 mt-2">
                            <input type="radio" id="three" name="time" value="3">
                            <label class="circle" for="three">03</label>

                            <input type="radio" id="seven" name="time" value="7">
                            <label class="circle" for="seven">07</label>

                            <input type="radio" id="fourteen" name="time" value="14">
                            <label class="circle" for="fourteen">14</label>

                            <input type="radio" id="thirty" name="time" value="30">
                            <label class="circle" for="thirty">30</label>

                        </div>
                    </div>

                    <div class="p-2 mb-1">
                        <h5>Hotel Category?</h5>
                        <div class="ml-4 mt-2">
                            <input type="radio" id="three_star" name="hotel" value="3">
                            <label class="box" for="three_star">3 Star</label>

                            <input type="radio" id="four_star" name="hotel" value="7">
                            <label class="box" for="four_star">4 Star</label>

                            <input type="radio" id="five_star" name="hotel" value="7">
                            <label class="box" for="five_star">5 Star</label>

                        </div>
                    </div>

                    <div class="button-box">
                        <button class="button trigger">Submit!</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4 bg-success">
                ok
            </div>
        </div>

    </div> --}}

    <div class='header'></div>
    <div class='sectionA'>
        <div class="left">
            What is Lorem Ipsum?
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.

            Why do we use it?
            It is a long established fact that a reader will be distracted by the readable content of a page when
            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
            letters, as opposed to using 'Content here, content here', making it look like readable English. Many
            desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
            search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved
            over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


            Where does it come from?
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
            Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
            Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem
            Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable
            source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
            of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular
            during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in
            section 1.10.32.

            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections
            1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact
            original form, accompanied by English versions from the 1914 translation by H. Rackham.

            Where can I get some?
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
            some form, by injected humour, or randomised words which don't look even slightly believable. If you are
            going to u
            What is Lorem Ipsum?
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.

            Why do we use it?
            It is a long established fact that a reader will be distracted by the readable content of a page when
            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
            letters, as opposed to using 'Content here, content here', making it look like readable English. Many
            desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
            search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved
            over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


        </div>
        <div class="right">
            Why do we use it?
            It is a long established fact that a reader will be distracted by the readable content of a page when
            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
            letters, as opposed to using 'Content here, content here',/div>
        </div>
    </div>
    <div class='sectionB'></div>

@endsection
