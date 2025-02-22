<x-layout>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 order-lg-2">
                    <h1 class="display-1">Hi, I'm Joseph Jett Abela and</h1>
                    <span class="fw-bolder display-6 mt-3">Im a <span
                            class="animated-text position-relative"></span></span>
                    <p class="fw-normal fs-5 mt-3" style="text-align: justify;">
                        I am a passionate developer with expertise in creating dynamic, user-friendly websites and
                        applications. I specialize in both front-end and back-end development, ensuring responsive and
                        high-performance web solutions.
                    </p>
                </div>
                <div class="col-12 col-lg-6 order-lg-1">
                    <div class="row mb-4 d-lg-none">
                        <div class="col-12 mb-2 d-flex justify-content-center d-sm-none">
                            <img class="rounded-3 img_pic" src="{{ asset('images/picture4.jpg') }}" alt="My picture 1" width="300"
                                height="380">
                        </div>
                        <div class="col-12 mb-2 d-none justify-content-center d-sm-flex col-sm-6 mb-md-0 col-md-4">
                            <img class="rounded-3 img_pic" src="{{ asset('images/picture4.jpg') }}" alt="My picture 1" width="200"
                                height="250">
                        </div>
                        <div class="col-12 mb-2 d-none justify-content-center d-sm-flex col-sm-6 mb-md-0 col-md-4">
                            <img class="rounded-3 img_pic" src="{{ asset('images/picture4.jpg') }}" alt="My picture 1" width="200"
                                height="250" style="filter: grayscale(50%);">
                        </div>
                        <div class="col-12 d-none d-md-flex col-md-4">
                            <img class="rounded-3 img_pic" src="{{ asset('images/picture4.jpg') }}" alt="My picture 1" width="200"
                                height="250" style="filter: grayscale(100%);">
                        </div>
                    </div>
                    <div class="row mb-4 d-none d-lg-flex">
                        <div class="col-12 col-lg-6 d-lg-flex justify-content-end">
                            <img class="rounded-3 img_pic" src="{{ asset('images/picture4.jpg') }}" alt="My picture 1" width="200"
                                height="250">
                        </div>
                        <div class="col-12 col-lg-6">
                            <img class="rounded-3 img_pic" src="{{ asset('images/picture4.jpg') }}" alt="My picture 1" width="200"
                                height="250" style="filter: grayscale(30%);">
                        </div>
                    </div>
                    <div class="row d-none d-lg-flex">
                        <div class="col-12 col-lg-6 d-lg-flex justify-content-end">
                            <img class="rounded-3 img_pic" src="{{ asset('images/picture4.jpg') }}" alt="My picture 1" width="200"
                                height="250" style="filter: grayscale(50%);">
                        </div>
                        <div class="col-12 col-lg-6">
                            <img class="rounded-3 img_pic" src="{{ asset('images/picture4.jpg') }}" alt="My picture 1" width="200"
                                height="250" style="filter: grayscale(100%);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    <script>
        let nav_links = document.getElementsByClassName('home_link');
    </script>
</x-layout>