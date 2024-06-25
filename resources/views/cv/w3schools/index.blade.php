<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{$user->name}}</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('w3schools-cv/style.css') }}">
    <style>
        .progress {
            width: 100%;
            background-color: #f1f1f1;
            border: 1px solid #ccc;
            
        }

        .progress-bar {
            width: 0%;
            height: 20px;
            background-color: #4caf50;
            text-align: center;
            line-height: 50px;
            color: white;
        }
    </style>
</head>

<body>

    <div id="page">
        <div class="photo-and-name">
            <img src="{{ $user->image != null ? asset("storage/".$user->image) : asset('no_image.png') }}" class="photo" alt="Profile Picture">
            <div class="contact-info-box">
                <h1 class="name">{{ucfirst($user->name)}}</h1>
                <br>
                <h3 class="job-title">{{strtoupper($applicant->title)}}</h3>
                <p class="contact-details">Phone: +92-344-4XX3-1XX &nbsp; - &nbsp; Email:{{$user->email}}</p>
            </div>
        </div>
        <div id="objective">
            <h3>Objective</h3>
            <p>
                {{$applicant->objective}}
            </p>
        </div>
        <div id="education">
            <h3>Education</h3>
            <table>
                @foreach ($educations as $education)
                <tr class="education-1">
                    <td>{{ucfirst($education->level)}} :</td>
                    <td>{{$education->institute}}, {{$education->board}}, {{$education->duration}} years, {{$education->subject}}, {{$education->grade}}</td>
                </tr>
                @endforeach
            </table>
        </div>
        <div id="work">
            <h3>Experience</h3>
            <table>
                @foreach ($experiences as $experience)
                <tr class="work-1">
                    <td>{{ Carbon\Carbon::parse($experience->form)->format('m/y') }} - {{ $experience->to ? Carbon\Carbon::parse($experience->to)->format('m/y') : 'continuing' }}</td>
                    <td><b>{{ucfirst($experience->company)}}</b> : {{ucfirst($experience->position)}}</td>
                </tr>
                @endforeach
            </table>
        </div>
        <div id="work">
            <h3>Skills</h3>
            <table>
                @foreach ($skills as $skill)
                <tr class="work-1">
                    <td>{{ $skill->SkillType->name }}</td>
                    <td style="width: 80%;">
                        @if ($skill->level == 'beginner')
                            <div class="progress">
                                <div class="progress-bar" style="width: 10%;"></div>
                            </div>
                        @elseif ($skill->level == 'intermediate')
                            <div class="progress">
                                <div class="progress-bar" style="width: 50%;"></div>
                            </div>
                        @elseif ($skill->level == 'advanced')
                            <div class="progress">
                                <div class="progress-bar" style="width: 100%;"></div>
                            </div>
                        @endif
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <div id="bio-data">
            <h3>Bio-Data</h3>
            <table>
                <tr>
                    <td>F'Name:</td>
                    <td><b>{{$user->name}}</b></td>
                </tr>
                <tr>
                    <td>Date of Birth:</td>
                    <td>{{ Carbon\Carbon::parse($applicant->dob)->format('d/m/Y') }}</td>
                </tr>
                <tr>
                    <td>Age:</td>
                    <td>{{ Carbon\Carbon::parse($applicant->dob)->diffForHumans() }}</td>
                </tr>
                <tr>
                    <td>NID:</td>
                    <td><b>{{ ucfirst($applicant->religion)}}</b></td>
                </tr>
                <tr>
                    <td>Religion:</td>
                    <td><b>{{ ucfirst($applicant->religion)}}</b></td>
                </tr>
                <tr>
                    <td>Nationality:</td>
                    <td><b>{{ ucfirst($applicant->nationality)}}</b></td>
                </tr>
                <tr>
                    <td>Marital Status:</td>
                    <td><b>{{ ucfirst($applicant->marital)}}</b></td>
                </tr>
            </table>
        </div>
        <a href="{{ route('cv.download', $user->id) }}" style="margin-top: 50px;">Download</a>
    </div>

</body>

</html>