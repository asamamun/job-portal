<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ucfirst($user->name)}}</title>
</head>
<body style="font-family: 'Helvetica Neue', Arial, sans-serif; margin: 0; padding: 0; color: #333; background-color: #f9f9f9;">

    <div style="max-width: 800px; margin: 5px auto; background-color: #fff; padding: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">

        <header style="text-align: center; margin-bottom: 5px;">
            <img src="{{ $image }}" alt="Your Photo" style="width: 120px; height: 120px; border-radius: 50%; border: 3px solid #3498db; margin-bottom: 10px;">
            <h1 style="margin: 0; font-size: 2.5em; color: #3498db;">{{ucfirst($user->name)}}</h1>
            <p style="margin: 5px 0; font-size: 1.2em;">{{strtoupper($applicant->title)}}</p>
            <p>Phone: {{$user->contact}} &nbsp; - &nbsp; Email:{{$user->email}}</p>
        </header>

        <section style="margin-bottom: 5px;">
            <h2 style="color: #3498db; border-bottom: 2px solid #3498db; padding-bottom: 5px;">Professional Summary</h2>
            <p>{{$applicant->objective}}</p>
        </section>

        <section style="margin-bottom: 5px;">
            <h2 style="color: #3498db; border-bottom: 2px solid #3498db; padding-bottom: 5px;">Education</h2>
            @foreach ($educations as $education)
                <div style="margin-bottom: 5px;">
                    <h3 style="">{{$education->session}}-{{$education->institute}}</h3>
                    <ul style="list-style: none;">
                        <li>Subject:- {{$education->subject}}</li>
                        <li>Board:- {{$education->board}}</li>
                        <li>Passing Year:- {{$education->passing_year}}</li>
                    </ul>
                </div>
            @endforeach
        </section>

        <section style="margin-bottom: 5px;">
            <h2 style="color: #3498db; border-bottom: 2px solid #3498db; padding-bottom: 5px;">Experience</h2>
            @foreach ($experiences as $experience)
                <div style="margin-bottom: 5px;">
                    <h3>{{$experience->company}}</h3>
                    <p>{{$experience->address}}</p>
                    <ul style="list-style: none;">
                        <li>Position:- {{$experience->position}}</li>
                        <li>Department:- {{$experience->department}}</li>
                        <li>{{ Carbon\Carbon::parse($experience->form)->format('m/y') }} - {{ $experience->to ? Carbon\Carbon::parse($experience->to)->format('m/y') : 'continuing' }}</li>
                        <li>{{$experience->description}}</li>
                    </ul>
                </div>
            @endforeach
        </section>

        <section style="margin-bottom: 5px;">
            <h2 style="color: #3498db; border-bottom: 2px solid #3498db; padding-bottom: 5px;">Language</h2>
            <table style="width: 100%;">
                @foreach ($languages as $language)
                <tr class="work-1" style="margin-bottom: 5px;">
                    <td>{{ $language->name }}</td>
                    <td style="width: 80%;">
                        @if ($language->level == 'beginner')
                            <span style="color: red; font-size: 20px;">**</span>
                        @elseif ($language->level == 'intermediate')
                            <span style="color: red; font-size: 20px;">**</span>
                        @elseif ($language->level == 'advanced')
                            <span style="color: red; font-size: 20px;">***</span> 
                        @endif
                    </td>
                </tr>
                @endforeach
            </table>
        </section>

        <section style="margin-bottom: 5px;">
            <h2 style="color: #3498db; border-bottom: 2px solid #3498db; padding-bottom: 5px;">Skills</h2>
            <table style="width: 100%;">
                @foreach ($skills as $skill)
                <tr class="work-1" style="margin-bottom: 5px;">
                    <td>{{ $skill->SkillType->name }}</td>
                    <td style="width: 80%;">
                        @if ($skill->level == 'beginner')
                            <span style="color: red; font-size: 20px;">**</span>
                        @elseif ($skill->level == 'intermediate')
                            <span style="color: red; font-size: 20px;">**</span>
                        @elseif ($skill->level == 'advanced')
                            <span style="color: red; font-size: 20px;">***</span> 
                        @endif
                    </td>
                </tr>
                @endforeach
            </table>
        </section>

        <section style="margin-bottom: 5px;">
            <h2 style="color: #3498db; border-bottom: 2px solid #3498db; padding-bottom: 5px;">Project</h2>
            @foreach ($projects as $project)
                <div style="margin-bottom: 5px;">
                    <h4 style="line-height: 5px; border-bottom: 1px solid #3498db; padding-bottom: 5px"><b>{{ucfirst($project->title)}}</b> (<i>{{Carbon\Carbon::parse($project->start_date)->format('m/y')}} - {{Carbon\Carbon::parse($project->end_date)->format('m/y')}}</i>)</h4>
                    <ul style="list-style: none;">
                        <li>{{ucfirst($project->status)}}</li>
                        <li>{{$project->description}}</li>
                        <li><a href="{{$project->url}}">{{$project->url}}</a></li>
                    </ul>
                </div>
            @endforeach
        </section>

        <section style="margin-bottom: 5px;">
            <h2 style="color: #3498db; border-bottom: 2px solid #3498db; padding-bottom: 5px;">Links</h2>
            <table style="width: 100%;">
                @foreach ($links as $link)
                <tr class="work-1">
                    <td><b>{{ucfirst($link->title)}}</b></td>
                    <td><a href="{{$link->url}}">{{$link->url}}</a></td>
                </tr>
                @endforeach
            </table>
        </section>

        <section style="margin-bottom: 5px;">
            <h2 style="color: #3498db; border-bottom: 2px solid #3498db; padding-bottom: 5px;">Personal Details</h2>
            <table style="width: 100%;">
                <tr>
                    <td>Father Name:</td>
                    <td><b>{{$applicant->father}}</b></td>
                </tr>
                <tr>
                    <td>Father Name:</td>
                    <td><b>{{$applicant->mother}}</b></td>
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
        </section>

        <section style="margin-bottom: 5px;">
            <h2 style="color: #3498db; border-bottom: 2px solid #3498db; padding-bottom: 5px;">Reference</h2>
            @foreach ($references as $reference)
                <div style="margin-bottom: 5px;">
                    <h3 style="">{{ucfirst($reference->name)}}</h3>
                    <p>{{$reference->designation}}</p>
                    <ul style="list-style: none;">
                        <li>{{$reference->organization}}</li>
                        <li>{{$reference->address}}</li>
                        <li>Relation:- {{$reference->relation}}</li>
                        <li>Phone:- {{$reference->phone}}</li>
                        <li>Email:- {{$reference->email}}</li>
                    </ul>
                </div>
            @endforeach
        </section>

    </div>
</body>
</html>
