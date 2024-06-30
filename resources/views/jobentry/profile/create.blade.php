@extends('jobentry.layout', ['title' => 'Job Entry'])
@section('head')

@endsection

@section('content')
@include('jobentry.inc.jumbotron')
<div class="container-fluid pt-3 pb-3" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Profile</h1>
        <div class="row g-5">
            @include('jobentry.inc.leftsidebar')
            <div class="col-md-9">
                {{-- <form action="{{ route('applicant.profile.store')}}" class="parsley-examples" method="POST" enctype="multipart/form-data"> --}}
                {{-- <form action="{{ route('applicant.profile.store')}}" class="parsley-examples" method="POST" > --}}
                    @if(isset($profile->id))
                    <form action="{{ route('applicant.profile.update', $profile->id) }}" class="parsley-examples" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                @else
                    <form action="{{ route('applicant.profile.store', ['profile' => $profile->id ?? '']) }}" class="parsley-examples" method="POST" enctype="multipart/form-data">
                @endif
                    @csrf
              

                        <div class="mb-3">
                            <label for="title" class="form-label">Title<span class="text-danger">*</span></label>
                            <input type="text" name="title" required="" value="{{ old('title')  }}" class="form-control" id="title">
                        </div>
                    <div class="mb-3">
                            <label for="objective" class="form-label">objective<span class="text-danger">*</span></label>
                            <textarea name="objective" required="" class="form-control" value="{{ old('objective')  }}" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="fathername" class="form-label">Father<span class="text-danger">*</span></label>
                            <input type="text" name="father" required="" value="{{ old('father')  }}" class="form-control" id="fathername">
                        </div>
                   
                        <div class="mb-3">
                            <label for="mothername" class="form-label"> Mother Name<span class="text-danger">*</span></label>
                            <input type="text" name="mother" required="" value="{{ old('mother') }}" class="form-control" id="mothername">
                        </div>
                        <div class="mb-3">
                            <label for="nidnumber" class="form-label"> Nid Number<span class="text-danger">*</span></label>
                            <input type="text" name="nid" required="" value="{{ old('nid')  }}" class="form-control" id="nidnumber">
                        </div>

                        <div class="mb-3">
                            <label for="file" class="form-label">File<span class="text-danger">*</span></label>
                            <input type="file" name="file" required="" value="{{ old('file')  }}" class="form-control" id="file">
                        </div>
                        <div class="mb-3">
                            <label for="cv" class="form-label">Cv<span class="text-danger">*</span></label>
                            <input type="file" name="cv" required="" value="{{ old('cv')  }}" class="form-control" id="cv">
                        </div>  
                        <div class="mb-3">
                            <label for="jobtype" class="form-label">Job Type<span class="text-danger">*</span></label>
                            <input type="text" name="jobtype" required="" value="{{ old('jobtype')  }}" class="form-control" id="jobtype">
                        </div>
                        <div class="mb-3">
                            <label for="location" class="form-label">Location<span class="text-danger">*</span></label>
                            <input type="text" name="location" required="" value="{{ old('location')  }}" class="form-control" id="location">
                        </div>
                        <div class="mb-3">
                            <label for="dob" class="form-label">Dob<span class="text-danger">*</span></label>
                            <input type="date" name="dob" required="" value="{{ old('dob')  }}" class="form-control" id="dob">    
                        </div>
                        
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender<span class="text-danger">*</span></label>
                            <select name="gender" required=""  value="{{ old('gender')  }}" class="form-control" id="gender">
                                <option value="male">male</option>
                                <option value="female">female</option>
                                <option value="others">others</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="religion" class="form-label">Religion<span class="text-danger">*</span></label>
                            <input type="text" name="religion" required="" value="{{ old('religion')  }}" class="form-control" id="religion">
                        </div>
                        <div class="mb-3">
                            <label for="nationality" class="form-label">Nationality<span class="text-danger">*</span></label>
                            <input type="text" name="nationality" required="" value="{{ old('nationality')  }}" class="form-control" id="nationality">
                        </div>
                       <div class="mb-3">
                            <label for="marital" class="form-label">Marital<span class="text-danger">*</span></label>
                            <select name="marital" required=""  value="{{ old('marital')  }}" class="form-control" id="marital">
                                <option value="single">single</option>
                                <option value="married">married</option>
                                <option value="others">others</option>
                            </select>
                        </div>  
                        <div class="mb-3">
                            <label for="type" class="form-label">Type<span class="text-danger">*</span></label>
                            <select name="type" required=""  value="{{ old('type')  }}" class="form-control" id="type">
                                <option value="0">Regular</option>
                                <option value="1">Professional</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="availablefor" class="form-label">Available For<span class="text-danger">*</span></label> 
                        <select name="available_for"   value="{{ old('available_for')  }}" class="form-control" id="availablefor">
                            <option value="part-time">Part Time</option>
                            <option value="full-time">Full Time</option>
                            <option value="both">Both</option>
                        </select>
                        </div>
                        <div class="mb-3">
                            <label for="points" class="form-label">Points<span class="text-danger">*</span></label>
                            <input type="text" name="points" required="" value="{{ old('points')  }}" class="form-control" id="points">
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status<span class="text-danger">*</span></label>
                            <select name="status" required=""  value="{{ old('status')  }}" class="form-control" id="status">
                                <option value="0">Inactive</option>
                                <option value="1">Active</option>
                            </select>
                        </div>
                    
                        <div class="mb-3">
                            <div class="form-check ">
                                <input id="checkbox6a" type="checkbox" class="form-check-input" data-parsley-multiple="checkbox6a">
                                <label for="checkbox6a" class="form-check-label">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <div class="text-end">
                            <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                            <button type="reset" class="btn btn-secondary waves-effect">Cancel</button>
                        </div>
                    </fieldset>
                </form>
              
            </div>
        </div>
    </div>
</div>
@include('jobentry.inc.footer')
@endsection