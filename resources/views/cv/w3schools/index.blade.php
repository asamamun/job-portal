<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $user->name }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=Archivo+Narrow&family=Open+Sans&family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">

    <style>
        /* Fonts */
        h1 {
            font-family: 'Julius Sans One', sans-serif;
            font-weight: 300;
            font-size: 1.2cm;
            transform: scale(1, 1.15);
            margin-bottom: 0.2cm;
            margin-top: 0.2cm;
            text-transform: uppercase;
            color: #333;
            /* Darker color for h1 */
        }

        h2 {
            font-family: 'Archivo Narrow', sans-serif;
            margin-top: 0.1cm;
            margin-bottom: 0.1cm;
        }

        h3 {
            font-family: 'Open Sans', sans-serif;
        }

        .jobPosition span,
        .projectName span {
            font-family: 'Source Sans Pro', sans-serif;
        }

        .upperCase {
            text-transform: uppercase;
        }

        .smallText,
        .smallText span,
        .smallText p,
        .smallText a {
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 0.35cm;
            text-align: justify;
        }

        /* End Fonts */
        .progress {
            width: 100%;
            height: 20px;
            background-color: #f1f1f1;
            border: 1px solid #ccc;
            margin-bottom: 0.3cm;
            /* Adjust as needed */
        }

        .progress-bar {
            /* width: 100%;  */
            width: 100px;
            /* Ensures the progress bar takes the full width of its container */
            height: 100%;
        }

        .bar {
            height: 100%;
            /* background-color: #4caf50; */

        }

        /* Colors */
        h1 {
            color: #333;
            /* Darker color for h1 */
        }

        .leftPanel,
        .leftPanel a {
            color: #666;
            /* Lighter color for left panel and links */
            text-decoration: none;
        }

        .leftPanel h2 {
            color: #333;
            /* Darker color for h2 in left panel */
        }

        .white {
            color: white;
        }

        /* End Colors */

        /* Sizes */
        .leftPanel,
        .leftPanel a {
            font-size: 0.38cm;
        }

        .projectName span,
        .jobPosition span {
            font-size: 0.35cm;
        }

        .smallText,
        .smallText span,
        .smallText p,
        .smallText a {
            font-size: 0.35cm;
        }

        .contactIcon {
            width: 0.5cm;
            text-align: center;
        }

        /* End Sizes */

        /* Layout */
        body {
            background: #f0f0f0;
            /* Light gray background */
            width: 21cm;
            height: 29.7cm;
            margin: 0 auto;
        }

        .container {
            display: flex;
            flex-direction: row;
            width: 100%;
            height: 100%;
        }

        .leftPanel {
            width: 27%;
            background-color: #e0e0e0;
            /* Lighter background color for left panel */
            padding: 0.7cm;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .leftPanel img.photo {
            width: 4cm;
            height: 4cm;
            margin-bottom: 0.7cm;
            border-radius: 10px;
            /* Rounded corners for rectangular image */
            border: 0.15cm solid white;
            object-fit: cover;
            object-position: 50% 50%;
        }

        .rightPanel {
            width: 73%;
            padding: 0.7cm;
            background-color: #ffffff;
            /* White background for right panel */
        }

        /* End Layout */

        /* Printing */
        page {
            background: white;
            display: block;
            margin: 0 auto;
            margin-bottom: 0.5cm;
        }

        page[size="A4"] {
            width: 21cm;
            height: 29.7cm;
        }

        @page {
            size: 21cm 29.7cm;
            padding: 0;
            margin: 0mm;
            border: none;
            border-collapse: collapse;
        }

        /* End Printing */

        /* Specific Adjustments */
        .contact-info-box {
            display: flex;
            align-items: center;
            background-color: #ccc;
            /* Lighter background color for contact info box */
            padding: 20px;
            justify-content: flex-start;
        }

        .contact-info-box img.photo {
            border-radius: 10px;
            /* Rounded corners for rectangular image */
        }

        .photo-container {
            width: 4cm;
            transform: skew(-10deg);
            overflow: hidden;
            margin-bottom: 0.7cm;
            margin-left: 0.7cm;
            border-radius: 5%;
            /* border: 0.15cm solid white; */
            /* object-fit: cover;
       object-position: 50% 50%; */
            margin-right: 40px;
        }

        /* End Specific Adjustments */
        .profile {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .profile img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .profile h1 {
            margin: 0;
            font-size: 28px;
        }
    </style>
</head>

<body>
    <page size="A4">
        <div class="contact-info-box">
            <img src="{{ $user->image != null ? asset('storage/' . $user->image) : asset('no_image.png') }}" class="photo-container" alt="Profile Picture">
            <div style="text-align: center; padding-top: 10px; padding-bottom: 5px;">
                <h1 class="name">{{ ucfirst($user->name) }}</h1>
                <h3 class="job-title">{{ strtoupper($applicant->title) }}</h3>
            </div>
        </div>
        <div class="profile">
        <div class="container">
            <div class="leftPanel">
                <!-- Assuming Laravel Blade syntax for image -->
                <div class="details">
                    <div class="item bottomLineSeparator">
                        <h2>CONTACT</h2>
                        <div class="smallText">
                            <p>
                                <i class="fa fa-phone contactIcon" aria-hidden="true"></i>
                                Phone: {{ $user->contact }}
                            </p>
                            <p>
                                <i class="fa fa-envelope contactIcon" aria-hidden="true"></i>
                                <a href="mailto:{{ $user->email }}">Email: {{ $user->email }}</a>
                            </p>
                            <p>
                                <i class="fa fa-map-marker contactIcon" aria-hidden="true"></i>
                                Location: {{ $applicant->location }}
                            </p>
                        </div>
                    </div>
                    <div class="item bottomLineSeparator">
                        <h2>Education</h2>
                        <table>
                            @foreach ($educations as $education)
                            <tr class="work-1">
                                <td><b>{{ ucfirst($education->level) }}</b>
                                    {{ $education->institute }}, {{ $education->board }},
                                    {{ $education->duration }} years, {{ $education->subject }},
                                    {{ $education->grade }}
                                </td>
                            </tr>
                            <tr class="spacer-row">
                                <td>&nbsp;</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>

                    <div class="item bottomLineSeparator">
                        <h2>Skills</h2>
                        <table>
                            @foreach ($skills as $skill)
                            <tr class="skill">
                                <td>{{ $skill->SkillType->name }}</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar">
                                            @if ($skill->level == 'beginner')
                                            <div class="bar" style="width: 10%;background-color: #f5c8c8;">
                                            </div>
                                            @elseif ($skill->level == 'intermediate')
                                            <div class="bar" style="width: 50%;background-color:#ecbee4;">
                                            </div>
                                            @elseif ($skill->level == 'advanced')
                                            <div class="bar" style="width: 100%;background-color: #c6fdcb;">
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>

                    <div class="item bottomLineSeparator">
                        <h2>Language</h2>
                        <table>
                            @foreach ($languages as $language)
                            <tr class="skill">
                                <td>{{ $language->name }}</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar">
                                            @if ($language->level == 'beginner')
                                            <div class="bar" style="width: 10%;background-color: #f5c8c8;">
                                            </div>
                                            @elseif ($language->level == 'intermediate')
                                            <div class="bar" style="width: 50%;background-color:#ecbee4;">
                                            </div>
                                            @elseif ($language->level == 'advanced')
                                            <div class="bar" style="width: 100%;background-color: #c6fdcb;">
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="item ">
                        <h2>Link</h2>
                        <table>
                            @foreach ($links as $link)
                            <tr class="work-1">
                                <td><b>{{ ucfirst($link->title) }}</b></td>
                                <td><a href="{{ $link->url }}">{{ $link->url }}</a></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <div class="rightPanel" style="background-color: #f0f0f0; padding: 10px;">

                <div id="page">

                    {{-- <div class="contact-info-box">
                        <h1 class="name">{{ucfirst($user->name)}}</h1>

                    <h3 class="job-title">{{strtoupper($applicant->title)}}</h3> --}}
                    {{-- <p class="contact-details">Phone: {{$user->contact}} &nbsp; - &nbsp; Email:{{$user->email}}</p> --}}
                    {{-- </div> --}}

                    <div id="objective">
                        <h3>Objective</h3>
                        <p>
                            {{ $applicant->objective }}
                        </p>
                    </div>


                    <div class="item">
                        <h2>WORK EXPERIENCE</h2>
                        <div class="workExperience">
                            <table>
                                @foreach ($experiences as $experience)
                                <tr>
                                    <td style="width: 60%; white-space: nowrap; display: inline-block;">
                                        <b>{{ ucfirst($experience->position) }}</b>
                                    </td>
                                    <td style="width: 40%; text-align: left; white-space: nowrap;">
                                        {{ Carbon\Carbon::parse($experience->form)->format('m/y') }} -
                                        {{ $experience->to ? Carbon\Carbon::parse($experience->to)->format('m/y') : 'continuing' }}
                                    </td>
                                </tr>
                                <tr style="height: 50px;">
                                    <td style="width: 100%;">
                                        {{ ucfirst($experience->company) }}
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>


                        <h2>Project</h2>
                        <div class="workExperience">
                            <table>
                                @foreach ($projects as $project)
                                <tr>
                                    <td style="width: 60%; white-space: nowrap; display: inline-block;">
                                        <b><b>{{ ucfirst($project->title) }}</b></b>
                                    </td>
                                    <td style="width: 40%; text-align: left; white-space: nowrap;">
                                        Status: {{ $project->status }}</td>
                                </tr>
                                <tr style="height: 30px;">
                                    <td style="width: 100%;">
                                        {{ $project->description }}
                                    </td>

                                </tr>
                                <tr>
                                    <td style="width: 100%;">
                                        <a href="{{ $project->url }}">{{ $project->url }}</a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>

                </div>
                <div class="item">
                    <h2>Personal Details</h2>
                    <div class="workExperience">
                        <table>

                            <tr>
                                <td style="width: 60%; white-space: nowrap; display: inline-block;"><b>Father Name:</b>
                                </td>
                                <td style="width: 40%; text-align: left; white-space: nowrap;">{{ $applicant->father }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 60%; white-space: nowrap; display: inline-block;"><b>Mother Name:</b>
                                </td>
                                <td style="width: 40%; text-align: left; white-space: nowrap;">{{ $applicant->mother }}
                                </td>
                            </tr>

                            <tr>
                                <td style="width: 60%; white-space: nowrap; display: inline-block;"><b>Date of
                                        Birth:</b></td>
                                <td style="width: 40%; text-align: left; white-space: nowrap;">
                                    {{ Carbon\Carbon::parse($applicant->dob)->format('d/m/Y') }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 60%; white-space: nowrap; display: inline-block;"><b>Age:</b></td>
                                <td style="width: 40%; text-align: left; white-space: nowrap;">
                                    {{ Carbon\Carbon::parse($applicant->dob)->diffForHumans() }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 60%; white-space: nowrap; display: inline-block;"><b>NID:</b></td>
                                <td style="width: 40%; text-align: left; white-space: nowrap;">
                                    {{ ucfirst($applicant->religion) }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 60%; white-space: nowrap; display: inline-block;"><b>Religion:</b>
                                </td>
                                <td style="width: 40%; text-align: left; white-space: nowrap;">
                                    {{ ucfirst($applicant->religion) }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 60%; white-space: nowrap; display: inline-block;"><b>Nationality:</b>
                                </td>
                                <td style="width: 40%; text-align: left; white-space: nowrap;">
                                    {{ ucfirst($applicant->nationality) }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 60%; white-space: nowrap; display: inline-block;"><b>Marital
                                        Status:</b></td>
                                <td style="width: 40%; text-align: left; white-space: nowrap;">
                                    {{ ucfirst($applicant->marital) }}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>


                <div class="item">
                    <h2>Reference</h2>
                    <div class="workExperience">
                        <table>
                            @foreach ($references as $reference)
                            <tr>
                                <td>
                                    <b><b>{{ ucfirst($reference->name) }}</b></b>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $reference->organization }}, {{ $reference->designation }},
                                    {{ $reference->phone }} years, {{ $reference->email }}
                                </td>
                            </tr>
                            <tr class="spacer-row">
                                <td>&nbsp;</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <a href="{{ route('cv.download', $user->id) }}" style="margin-top: 50px; text-decoration: none">Download</a>
                &nbsp;
                <a href="{{ route('send.page') }}" style="margin-top: 50px; text-decoration: none">Send</a>

            </div>
            </div>
            </div>

    </page>
</body>

</html>