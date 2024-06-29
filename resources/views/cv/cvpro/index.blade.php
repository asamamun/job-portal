<!DOCTYPE html>
<html>
<head>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&family=Julius+Sans+One&family=Open+Sans&family=Source+Sans+Pro&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('jobentry/css/cvpro.css') }}">
 
</head>
<body>
  <page size="A4">
    <div class="container">
      <div class="leftPanel">
        <img src="{{ $user->image != null ? asset("storage/".$user->image) : asset('no_image.png') }}" class="photo" alt="Profile Picture">
           
        <div class="details">
          <div class="item bottomLineSeparator">
            <h2>
              CONTACT
            </h2>
            <div class="smallText">
              <p>
                <i class="fa fa-phone contactIcon" aria-hidden="true"></i>
                (+33) 777 777 77
              </p>
              <p>
                <i class="fa fa-envelope contactIcon" aria-hidden="true"></i>
                <a href="mailto:lorem@ipsum.com@gmail.com">
                {{$user->email}}
                </a>
              </p>
              <p>
                <i class="fa fa-map-marker contactIcon" aria-hidden="true"></i>
                {{$applicant->location}}
              </p>
              <p>
                <i class="fa fa-linkedin-square contactIcon" aria-hidden="true"></i>
                <a href="#">
                  in/loremipsum
                </a>
              </p>
              <p class="lastParagrafNoMarginBottom">
                <i class="fa fa-skype contactIcon" aria-hidden="true"></i>
                <a href="#">
                  loremipsum
                </a>
              </p>
            </div>
          </div>
          <div class="item bottomLineSeparator">
            <h2>
              SKILLS
            </h2>
            <div class="smallText">
              <div class="skill">
                <div>
                  <span>Accounting</span>
                </div>
                <div class="yearsOfExperience">
                  <span class="alignright">14</span>
                  <span class="alignleft">years</span>
                </div>
              </div>

              <div class="skill">
                <div>
                  <span>Word</span>
                </div>
                <div class="yearsOfExperience">
                  <span class="alignright">3</span>
                  <span class="alignleft">years</span>
                </div>
              </div>

              <div class="skill">
                <div>
                  <span>Powerpoint</span>
                </div>
                <div class="yearsOfExperience">
                  <span class="alignright">3</span>
                  <span class="alignleft">years</span>
                </div>
              </div>

              <div class="skill">
                <div>
                  <span>Accounting</span>
                </div>
                <div class="yearsOfExperience">
                  <span class="alignright">2</span>
                  <span class="alignleft">years</span>
                </div>
              </div>

              <div class="skill">
                <div>
                  <span>Marketing</span>
                </div>
                <div class="yearsOfExperience">
                  <span class="alignright">2</span>
                  <span class="alignleft">years</span>
                </div>
              </div>

              <div class="skill">
                <div>
                  <span>Photoshop</span>
                </div>
                <div class="yearsOfExperience">
                  <span class="alignright">2</span>
                  <span class="alignleft">years</span>
                </div>
              </div>

              <div class="skill">
                <div>
                  <span>French</span>
                </div>
                <div class="yearsOfExperience">
                  <span class="alignright">2</span>
                  <span class="alignleft">years</span>
                </div>
              </div>

              <div class="skill">
                <div>
                  <span>English</span>
                </div>
                <div class="yearsOfExperience">
                    <span class="alignright">1</span>
                    <span class="alignleft">year</span>
                </div>
              </div>

              <div class="skill">
                <div>
                  <span>Management</span>
                </div>
                <div class="yearsOfExperience">
                  <span>1 year</span>
                </div>
              </div>

            </div>
          </div>
          <div class="item">
            <h2>
              EDUCATION
            </h2>
            <div class="smallText">
              <p class="bolded white">
                Bachelor of Economics
              </p>
              <p>
                The University of Sydney
              </p>
              <p>
                2010 - 2014
              </p>
            </div>
          </div>
        </div>
        
      </div>
      <div class="rightPanel">
        <div>
          <h1>
            {{$user->name}}
          </h1>
          <div class="smallText">
            <h3>
              {{strtoupper($applicant->title)}}
            </h3>
          </div>
        </div>
        <div>
          <h2>
            About me
          </h2>
          <div class="smallText">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris venenatis, justo sed feugiat pulvinar., quam ipsum tincidunt enim, ac gravida est metus sit amet neque. Curabitur ut arcu ut nunc finibus accumsan id id elit. 
            </p>
            <p>
              Vivamus non magna quis neque viverra finibus quis a tortor. 
            </p>
          </div>
        </div>
        <div class="workExperience">
          <h2>
            Work experience
          </h2>
          <ul>
            <li>
              <div class="jobPosition">
                <span class="bolded">
                  Accountant
                </span>
                <span>
                  Jun 2014 - Sept 2015
                </span>
              </div>
              <div class="projectName bolded">
                <span>
                  Accounting project name | Company name
                </span>
              </div>
              <div class="smallText">
                <p>
                  Quisque rutrum mollis ornare. In pharetra diam libero, non interdum dui imperdiet quis. Quisque aliquam sapien in libero finibus sodales. Mauris id commodo metus. In in laoreet dolor.
                </p>
                <ul>
                  <li>
                    Integer commodo ullamcorper mauris, id condimentum lorem elementum sed. Etiam rutrum eu elit ut hendrerit. Vestibulum congue sem ac auctor semper. Aenean quis imperdiet magna. Sed eget ullamcorper enim. Vestibulum consequat turpis eu neque efficitur blandit sed sit amet neque. Curabitur congue semper erat nec blandit.
                  </li>
                </ul>
                <p>
                  <span class="bolded">Skills: </span>Accounting, Word, Powerpoint
                </p>
              </div>
            </li>


            <li>
              <div class="jobPosition">
                <span class="bolded">
                  Digital Marketing Expert
                </span>
                <span>
                  Nov 2020 - Sept 2021
                </span>
              </div>
              <div class="projectName bolded">
                <span>
                  Project name | Company name
                </span>
              </div>
              <div class="smallText">
                <p>
                  Morbi rhoncus, tortor vel luctus tincidunt, sapien lacus vehicula augue, vitae ultrices eros diam eget mauris. Aliquam dictum nulla vel augue tristique bibendum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                </p>
                <ul>
                  <li>
                    <p>
                      Phasellus ac accumsan ligula. Morbi quam massa, pellentesque nec nunc nec, consectetur gravida dolor. Mauris vulputate sagittis pellentesque. Donec luctus lorem luctus purus condimentum, id ultrices lacus aliquam.
                    </p>
                  </li>
                  <li>
                    <p>
                      Quisque et lorem sagittis lacus lobortis euismod non id mi. Nulla sed tincidunt libero, placerat imperdiet magna. Quisque lectus quam, viverra eu congue ut, congue vitae metus. Sed in varius sapien. Cras et elementum tellus.
                    </p>
                  </li>
                </ul>
                <p>
                  <span class="bolded">Skills: </span> Writing, Photoshop
                </p>
              </div>
            </li>

            <li>
              <div class="jobPosition">
                <span class="bolded">
                  Accountant
                </span>
                <span>
                  Jun 2017 - May 2020
                </span>
              </div>
              <div class="projectName bolded">
                <span>
                  Project name | Company name
                </span>
              </div>
              <div class="smallText">
                <p>
                  Maecenas eget semper sapien. Sed convallis nunc egestas dui convallis dictum id nec metus. Donec vestibulum justo mauris, ac congue lacus tincidunt id. Vivamus rhoncus risus ac ex varius gravida. Donec eget ullamcorper ipsum.
                </p>
  
                <ul>
                  <li>
                    <p>
                      Maecenas auctor euismod felis vel semper. Nulla facilisi. Quisque quis odio dui. Morbi venenatis magna quis libero mollis facilisis. Ut semper, eros eu dictum efficitur, ligula felis aliquet ante, sed commodo odio nisi a augue. 
                    </p>
                  </li>
                  <li>
                    <p>
                      Curabitur at interdum nunc, nec sodales nulla. Nulla facilisi. Nam egestas risus sed maximus feugiat. Sed semper arcu ac dui consectetur consectetur. Nulla dignissim nec turpis id rhoncus. In hac habitasse platea dictumst. 
                    </p>
                  </li>
                  <li>
                    <p>
                      Nunc iaculis mauris nec viverra placerat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam erat volutpat. Vivamus sed ex et magna volutpat sodales et sed odio. 
                    </p>
                  </li>
                </ul>
                <p>
                  <span class="bolded">Skills: </span>Management, French
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </page>
  
</body>
</html>