<x-layout>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h1 class="display-1 fw-bolder">About Me</h1>
                    <ul>
                        <h1 class="fw-bold display-6 mt-3">Work Experience :</h1>
                        <li>
                            <p class="fw-normal fs-6" style="text-align: justify;">
                                <b>Data Processor @ Dynata ( Onsite for 9 months ) ( Dec 2022 - Sep 2023 ) -</b> check
                                and validate the data to make sure the data is good quality before sending it to the
                                client.
                            </p>
                        </li>
                        <li>
                            <p class="fw-normal fs-6" style="text-align: justify;">
                                <b>Junior Web Developer @ GrounLink ( Onsite for 3 months ) ( Feb 2024 - May 2024 )
                                    -</b> I was assigned to the server team and was responsible for maintaining, adding
                                new features, and fixing bugs. Implemented security measures including iptables,
                                ModSecurity, and Maldet. Monitored and managed server operations.
                            </p>
                        </li>
                        <h1 class="fw-bold display-6 mt-3">Skills :</h1>
                        <li>
                            <p class="fw-normal fs-6" style="text-align: justify;">
                                <b>Web Development -</b> ( HTML, CSS, JavaScript, PHP, Bootstrap, Tailwind CSS, Ajax,
                                jQuery, MySQL, Laravel, CodeIgniter, Vue js )
                            </p>
                        </li>
                        <li>
                            <p class="fw-normal fs-6" style="text-align: justify;">
                                <b>Android Development -</b> ( Java )
                            </p>
                        </li>
                        <li>
                            <p class="fw-normal fs-6" style="text-align: justify;">
                                <b>Version Control -</b> ( Git )
                            </p>
                        </li>
                        <li>
                            <p class="fw-normal fs-6" style="text-align: justify;">
                                <b>Server Side -</b> ( Linux )
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-6 mt-5">
                    <div class="row mb-4 d-none d-lg-flex">
                        <div class="col-12 col-lg-6 d-lg-flex justify-content-end">
                            <img class="rounded-3 img_pic" src="/images/picture4.jpg" alt="My picture 1" width="200"
                                height="250" style="transform: rotate(-20deg);">
                        </div>
                        <div class="col-12 col-lg-6">
                            <img class="rounded-3 img_pic" src="/images/picture4.jpg" alt="My picture 1" width="200"
                                height="250" style="filter: grayscale(30%); transform: rotate(20deg);">
                        </div>
                    </div>
                    <div class="row d-none d-lg-flex">
                        <div class="col-12 col-lg-6 d-lg-flex justify-content-end">
                            <img class="rounded-3 img_pic" src="/images/picture4.jpg" alt="My picture 1" width="200"
                                height="250" style="filter: grayscale(50%); transform: rotate(-20deg);">
                        </div>
                        <div class="col-12 col-lg-6">
                            <img class="rounded-3 img_pic" src="/images/picture4.jpg" alt="My picture 1" width="200"
                                height="250" style="filter: grayscale(100%); transform: rotate(20deg);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    <script>
        let nav_links = document.getElementsByClassName('aboutme_link');
        
        for (let i = 0; i < nav_links.length; i++) {
            nav_links[i].classList.add("Active");
        }
    </script>
</x-layout>
