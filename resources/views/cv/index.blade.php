<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern CV</title>
</head>
<body style="font-family: 'Helvetica Neue', Arial, sans-serif; margin: 0; padding: 0; color: #333; line-height: 1.6; background-color: #f9f9f9;">

    <div style="max-width: 800px; margin: 40px auto; background-color: #fff; padding: 40px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">

        <header style="text-align: center; margin-bottom: 40px;">
            <img src="your-image-url.jpg" alt="Your Photo" style="width: 120px; height: 120px; border-radius: 50%; border: 3px solid #3498db; margin-bottom: 20px;">
            <h1 style="margin: 0; font-size: 2.5em; color: #3498db;">Your Name</h1>
            <p style="margin: 10px 0; font-size: 1.2em;">your.email@example.com | (123) 456-7890 | Your Address, City, State, ZIP</p>
        </header>

        <section style="margin-bottom: 40px;">
            <h2 style="color: #3498db; border-bottom: 2px solid #3498db; padding-bottom: 5px;">Professional Summary</h2>
            <p>A highly motivated and experienced professional with over X years of experience in [Your Industry]. Demonstrated expertise in [Key Skills]. Adept at [Brief Description of Responsibilities and Achievements].</p>
        </section>

        <section style="margin-bottom: 40px;">
            <h2 style="color: #3498db; border-bottom: 2px solid #3498db; padding-bottom: 5px;">Experience</h2>
            <div style="margin-bottom: 20px;">
                <h3 style="margin: 5px 0; font-size: 1.5em;">Job Title 1</h3>
                <p style="margin: 5px 0; color: #666;">Company Name, Location</p>
                <p style="margin: 5px 0; color: #666;">Month Year - Month Year</p>
                <ul style="margin: 10px 0 0 20px; list-style-type: disc;">
                    <li>Responsibility or Achievement 1</li>
                    <li>Responsibility or Achievement 2</li>
                    <li>Responsibility or Achievement 3</li>
                </ul>
            </div>
            <div>
                <h3 style="margin: 5px 0; font-size: 1.5em;">Job Title 2</h3>
                <p style="margin: 5px 0; color: #666;">Company Name, Location</p>
                <p style="margin: 5px 0; color: #666;">Month Year - Month Year</p>
                <ul style="margin: 10px 0 0 20px; list-style-type: disc;">
                    <li>Responsibility or Achievement 1</li>
                    <li>Responsibility or Achievement 2</li>
                    <li>Responsibility or Achievement 3</li>
                </ul>
            </div>
        </section>

        <section style="margin-bottom: 40px;">
            <h2 style="color: #3498db; border-bottom: 2px solid #3498db; padding-bottom: 5px;">Education</h2>
            <div style="margin-bottom: 20px;">
                <h3 style="margin: 5px 0; font-size: 1.5em;">Degree Name</h3>
                <p style="margin: 5px 0; color: #666;">University Name, Location</p>
                <p style="margin: 5px 0; color: #666;">Month Year - Month Year</p>
            </div>
            <div>
                <h3 style="margin: 5px 0; font-size: 1.5em;">Degree Name</h3>
                <p style="margin: 5px 0; color: #666;">University Name, Location</p>
                <p style="margin: 5px 0; color: #666;">Month Year - Month Year</p>
            </div>
        </section>

        <section style="margin-bottom: 40px;">
            <h2 style="color: #3498db; border-bottom: 2px solid #3498db; padding-bottom: 5px;">Skills</h2>
            <ul style="margin: 10px 0 0 20px; list-style-type: disc;">
                <li>Skill 1</li>
                <li>Skill 2</li>
                <li>Skill 3</li>
                <li>Skill 4</li>
            </ul>
        </section>

        <section>
            <h2 style="color: #3498db; border-bottom: 2px solid #3498db; padding-bottom: 5px;">Certifications</h2>
            <ul style="margin: 10px 0 0 20px; list-style-type: disc;">
                <li>Certification 1</li>
                <li>Certification 2</li>
            </ul>
        </section>

    </div>
    <a href="{{ route('cv.download', $user->id) }}" style="margin-top: 50px;">Download</a>
</body>
</html>
