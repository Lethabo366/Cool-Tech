<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legal Page</title>
    @vite(['resources/css/styles.css'])
</head>

<body>
    <!-- Below is the navigation bar -->
    <div class="topnav">
        <a href="{{ url('/') }}/">Home</a>
        <a class="active" href="{{ url('/Search/') }}/">Search</a>
        <a href="{{ url('/legal/') }}/">Legal</a>
    </div>
    </br>
    <!-- Below is the main heading of the legal page -->
    <h1>Terms and Conditions</h1>
    <p><strong>Last Updated: 2025-01-01</strong></p>

    <p>Welcome to Cool Tech (“Website”, “we”, “us”, or “our”). By accessing and using this Website, you agree to comply with and be bound by the following terms and conditions (“Terms”). If you do not agree with any part of these Terms, please do not use our Website.</p>

    <h2>1. Use of the Website</h2>
    <ul>
        <li>You must be at least 18 years old or have the consent of a parent or guardian to use this Website.</li>
        <li>You agree to use the Website only for lawful purposes and in accordance with these Terms.</li>
    </ul>

    <h2>2. Intellectual Property</h2>
    <p>All content, including text, graphics, logos, and images, on this Website is our property or the property of our licensors. Unauthorized use is prohibited.</p>
    <p>You may not reproduce, distribute, or create derivative works from our content without prior written consent.</p>

    <h2>3. User-Generated Content</h2>
    <p>By submitting content to our Website, you grant us a non-exclusive, royalty-free, worldwide license to use, display, and distribute that content.</p>
    <p>You are responsible for ensuring that your submitted content does not infringe on third-party rights or violate applicable laws.</p>

    <h2>4. Privacy Policy</h2>
    <p>Your use of the Website is also governed by our <a href="#">Privacy Policy</a>. Please review it carefully.</p>

    <h2>5. Third-Party Links</h2>
    <p>Our Website may contain links to third-party websites. We are not responsible for the content, accuracy, or practices of those websites.</p>

    <h2>6. Limitation of Liability</h2>
    <p>We are not liable for any direct, indirect, incidental, or consequential damages arising from your use of the Website or inability to access it.</p>

    <h2>7. Indemnification</h2>
    <p>You agree to indemnify and hold us harmless from any claims, damages, or expenses resulting from your use of the Website or violation of these Terms.</p>

    <h2>8. Governing Law</h2>
    <p>These Terms are governed by the laws of [Country/State], without regard to its conflict of law principles.</p>

    <h2>9. Modifications to the Terms</h2>
    <p>We reserve the right to update or modify these Terms at any time. Changes will be posted on this page, and your continued use of the Website indicates acceptance of the revised Terms.</p>

    <h2>10. Contact Us</h2>
    <p>If you have any questions about these Terms, please contact us at:</p>
    <p><a href="mailto:lethabo@coolTech.com">lethabo@coolTech.com</a></p>

</body>

<footer class="dogs">
    <x-alert>
    </x-alert>
    <!-- Below is the trademark which will display the current year. -->
    <p>&copy; {{ date('Y') }} laravel. All rights reserved.</p>
    <!-- Below are links to the Search and legal blades. -->
    <a href="{{ url('/Search/') }}/">Search</a>
    <a href="{{ url('/legal/') }}/">legal</a>

</footer>

</html>