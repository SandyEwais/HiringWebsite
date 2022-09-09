<x-layout>
    <x-pic-card>
        <br>
        <br>
        <h2>Our <em>Jobs</em></h2>
        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula</p>
    </x-pic-card>
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>

            <div class="row">
                <div class="col-lg-4">
                    <form action="{{route('filter')}}" method="POST">
                        @csrf
                         <h5 style="margin-bottom: 15px">Type</h5>

                         <div>
                              <label>
                                   <input type="checkbox" name="Contract">

                                   <span>Contract</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox" name="Full time">

                                   <span>Full time</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox" name="Internship">

                                   <span>Internship</span>
                              </label>
                         </div>

                         <br>

                         <h5 style="margin-bottom: 15px">Category</h5>

                         <div>
                              <label>
                                   <input type="checkbox" name="category">

                                   <span>Accounting</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox" name="category">

                                   <span>Finance</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox" name="category">

                                   <span>Insurance Jobs</span>
                              </label>
                         </div>

                         <br>

                         <h5 style="margin-bottom: 15px">Career levels</h5>

                         <div>
                              <label>
                                   <input type="checkbox" name="career-level">

                                   <span>Entry Level</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox" name="career-level">

                                   <span>Med Level</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox" name="careerLevel">

                                   <span>Pro Level</span>
                              </label>
                         </div>

                         <br>

                         <h5 style="margin-bottom: 15px">Education levels</h5>

                         <div>
                              <label>
                                   <input type="checkbox" name="educationLevel">

                                   <span>High School Degree</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox" name="educationLevel">

                                   <span>College Degree</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox" name="educationLevel">

                                   <span>Institute Degree</span>
                              </label>
                         </div>

                         <br>


                         <h5 style="margin-bottom: 15px">Years of experience</h5>

                         <div>
                              <label>
                                   <input type="checkbox" name="experience">

                                    <span>&lt; 15</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox" name="experience">

                                    <span>&lt; 10</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox" name="experience">

                                    <span>&lt; 5</span>
                              </label>
                         </div>
                         
                         <br>
                         <div style="
                                display: inline-block;
                                font-size: 15px;
                                padding: 12px 20px;
                                background-color: #ed563b;
                                color: #fff;
                                text-align: center;
                                font-weight: 400;
                                text-transform: uppercase;
                                transition: all .3s;
                                ">
                              <button type="submit">Get Results </button>
                         </div>
                         
                    </form>
                    
                    <br>
                </div>

                <div class="col-lg-8">
                    <div class="row">
                        @foreach ($jobs as $job)
                        <div class="col-md-6">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <img src="{{$job->image ? asset('image/$job->image') : asset('images/No_Image_Available.jpg')}}" alt="">
                                </div>
                                <div class="down-content">
                                    <span> <sup>$</sup>7{{$job->salary}} </span>

                                    <h4>{{$job->title}}</h4>

                                    <p>{{$job->category}}</p>

                                    <ul class="social-icons">
                                        <li><a href="job-details.html">+ View More</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            

            <br>
            {{$jobs->links()}}
                
            

        </div>
    </section>
</x-layout>