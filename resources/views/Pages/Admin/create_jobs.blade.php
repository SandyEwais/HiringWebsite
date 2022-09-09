<x-layout>
    <section class="section" id="contact-us" style="margin-top: 0">    
                <div class="">
                    <div class="contact-form section-bg" style="padding: 150px; background-image: url({{asset('images/contact-1-720x480.jpg')}})">
                        <form id="contact" action="{{route('store-job')}}" method="post">
                            @csrf
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                  <label style="
                                  font-style: normal;
                                  color: #ed563b;
                                  font-weight: 900;">Employer Info : </label>
                                </fieldset>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                <fieldset>
                                  <label style="
                                  font-style: normal;
                                  color: #ed563b;
                                  font-weight: 900;">Job Info : </label>
                                </fieldset>
                              </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input style="margin-bottom: 0px;margin-top: 20px" name="employer-name" type="text" id="name" placeholder="Name" value="{{old('employer-name')}}">
                                @error('employer-name')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                  <input style="margin-bottom: 0px;margin-top: 20px" name="title" type="text" id="title" placeholder="Title" value="{{old('title')}}">
                                  @error('title')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                  @enderror
                                </fieldset>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                <fieldset>
                                  <input style="margin-bottom: 0px;margin-top: 20px" name="employer-email" type="email" id="email" placeholder="Email" value="{{old('employer-email')}}">
                                  @error('employer-email')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                  @enderror
                                </fieldset>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                <fieldset>
                                  <input style="margin-bottom: 0px;margin-top: 20px" name="salary" type="number" id="salary" placeholder="Salary" value="{{old('salary')}}">
                                  @error('salary')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                  @enderror
                                </fieldset>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                <fieldset>
                                  <input style="margin-bottom: 0px;margin-top: 20px" name="employer-phone" type="number" id="phone" placeholder="Phone" value="{{old('employer-phone')}}">
                                  @error('employer-phone')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                  @enderror
                                </fieldset>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                <fieldset>
                                  <input style="margin-bottom: 0px;margin-top: 20px" name="category" type="text" id="category" placeholder="Category" value="{{old('category')}}">
                                  @error('category')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                  @enderror
                                </fieldset>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                <fieldset>
                                  <input style="margin-bottom: 0px;margin-top: 20px" name="employer-location" type="text" id="location" placeholder="location" value="{{old('employer-location')}}">
                                  @error('employer-location')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                  @enderror
                                </fieldset>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                <fieldset>
                                  <input style="margin-bottom: 0px;margin-top: 20px" name="image" type="file" id="image" placeholder="image">
                                  @error('image')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                  @enderror
                                </fieldset>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                <fieldset>
                                  <input style="margin-bottom: 0px;margin-top: 20px" name="employer-website" type="url" id="website" placeholder="website" value="{{old('employer-website')}}">
                                  @error('employer-website')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                  @enderror
                                </fieldset>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                <fieldset>
                                  <textarea style="height: 40px;margin-bottom: 0px;margin-top: 20px" name="employer-description" id="about" placeholder="About Employer">{{old('employer-description')}}</textarea>
                                  @error('employer-description')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                  @enderror
                                </fieldset>
                              </div>
                              <div class="col-md-12">
                                <fieldset>
                                  <textarea style="margin-bottom: 0px;margin-top: 20px" name="description" id="description" placeholder="Job Description">{{old('description')}}</textarea>
                                  @error('description')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                  @enderror
                                </fieldset>
                              </div>
                            
                            <div class="col-lg-12">
                              <fieldset style="margin-top: 30px">
                                <button type="submit" id="form-submit" class="main-button">Submit</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
    </section>
</x-layout>