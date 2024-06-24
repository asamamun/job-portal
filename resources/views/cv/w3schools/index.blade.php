<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{$user->name}}</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('w3schools-cv/style.css') }}">
</head>

<body>

    <div id="page">
        <div class="photo-and-name">
            <img src="{{ $user->image != null ? asset("storage/".$user->image) : asset('no_image.png') }}" class="photo" alt="Profile Picture">
            <div class="contact-info-box">
                <h1 class="name">{{$user->name}}</h1>
                <br>
                <h3 class="job-title">{{strtoupper($applicant->title)}}</h3>
                <p class="contact-details">Phone: +92-344-4XX3-1XX &nbsp; - &nbsp; Email: contact@muhammadovi.com</p>
            </div>
        </div>
        <div id="objective">
            <h3>Objective</h3>
            <p>
                To take a challenging and managerial role in the field of Computer programming and implement the expertise and experience gained in this field to develop complex project with efficiency and quality.
            </p>
        </div>
        <div id="education">
            <h3>Education</h3>
            <table>
                @foreach ($educations as $education)
                <tr class="school-1">
                    <td rowspan="2">2002 - 2015</td>
                    <td><b>{{$education->level}}</b>: ABC School (Standard KG-VIII)</td>
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
                    <td><b>ABC Corp</b>: As an IT Manager and Call Service Representative</td>
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
                    <td>CNIC:</td>
                    <td><b>42401-XXXXXXX-7</b></td>
                </tr>
                <tr>
                    <td>Religion:</td>
                    <td><b>{{ ucfirst($applicant->religion)}}</b></td>
                </tr>
                <tr>
                    <td>Nationality:</td>
                    <td><b>Pakistani</b></td>
                </tr>
                <tr>
                    <td>Marital Status:</td>
                    <td><b>Unmarried</b></td>
                </tr>
            </table>
        </div>
        <a href="{{ route('cv.download', $user->id) }}" style="margin-top: 50px;">Download</a>
    </div>

</body>

</html>