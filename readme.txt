=== Surbma - GDPR Proof Cookies ===
Contributors: Surbma
Donate link: https://surbma.com/donate/
Tags: gdpr, analytics, google analytics, popup, cookie, cookie compliance, cookie law, cookies, eu cookie, facebook, facebook pixel, hotjar
Requires at least: 4.6
Tested up to: 4.9
Requires PHP: 5.6
Stable tag: 7.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin helps your website to comply with GDPR cookie regulations by asking every visitors to accept or decline cookie tracking.

== Description ==

This plugin helps your website to comply with GDPR cookie regulations by asking every visitors to accept or decline cookie tracking. If visitor choose to decline, than no visitor data will be sent to third party services. If visitor accepts tracking, than data will be sent to third parties. So visitors can choose to be tracked or not, before they visit any page of the website.

The Surbma - GDPR Proof Cookies plugin is a clone from my original Surbma - GDPR Proof Google Analytics plugin. So it is now supporting only Google Analytics tracking, but it will soon support Facebook Pixel, Google Remarketing, HotJar and other popular services also. It will even support custom codes also. Websites, where my Surbma - GDPR Proof Google Analytics plugin have already installed and used will be inheriting all settings, so every website will be the same as with the previous plugin. You have to deactivate my Surbma - GDPR Proof Google Analytics plugin first.

The cookie saved by this plugin is not storing any sensitive personal data, it is storing only two fix values: "yes" or "no". This cookie management is GDPR proof, as it is impossible to identify any user with the cookie data. Cookies will expire in 30 days by default.

**Cookie Settings Link:**
There is a shortcode, that will place a link in your content. Clicking on the link will open the Cookie Popup again, and users can change their settings about the Cookie trackings.

This is the shortcode: `[surbma-cookie-popup-link]`

It has 2 attributes:
- class - You can set the class of the link, so you can easily create a button like link.
- text - You can change the default text of the link, which is "Open Cookie Settings".

Examples:
- `[surbma-cookie-popup-link text="I've changed my mind about Cookie settings."]`
- `[surbma-cookie-popup-link class="button" text="Please show me the Cookie settings again!"]`

**Limited Liability:**
This plugin does not substitute any legal adequacy. Texts, that are displayed in the popup is edited by the user of this plugin and I do not take any responsibility regarding GDPR adequacy or change.

**Cookie Policy:**
Set your Cookie Policy page, where the popup won't load for visitors. Cookie tracking codes are not loading on this page!

**Developer Friendly:**
If you enable debug mode, popup will show always, on every refresh, so you can test how it works.

**WPML Compatible:**
If you have a multilingual website, you can set the texts for each language with WPML String Translation add-on.

**PRO VERSION**

USE `BEFOREGDPR` COUPON CODE FOR 20% OFF FROM YOUR FIRST PURCHASE TILL MAY 26, 2018!

**Full Customizations:**
Every text is customizable, even the button's texts! You can also set the design of the buttons.

**Cookie Policy Link:**
Show your Cookie Policy page link in the popup.

**Themes:**
There are popup themes to choose the design, you like. The Full Page Themes are hiding the entire content behind the popup. There are a lot of design settings to make the popup fit your website design. Dark mode is also available.

**Full Cookie Control:**
Set cookie expiration for visitors, so the popup won't show again in X days, you set.

**Google Analytics IP Anonymization:**
You might need to disable IP Anonymization of the hit sent to Google Analytics. This setting is active by default to ensure the maximum GDPR compliance, but you can disable this option.

**Google Analytics Tracking Code Customizations:**
Choose between gtag.js framework or analytics.js library. You can also set, if you want to track logged in users or the admin area.

**You can find my other plugins and projects on GitHub:**

[https://github.com/Surbma](https://github.com/Surbma)

Please feel free to contribute, help or recommend any new features for my plugins, themes and other projects.

**Do you want to know more about me?**

Visit my webpage: [Surbma.com](http://surbma.com/)

**Do you like and use my free plugins?**

You can donate me for FREE here: [Surbma.com](http://surbma.com/donate/)

== Installation ==

1. Upload `surbma-gdpr-proof-google-analytics` folder to the `/wp-content/plugins/` directory
2. Activate the Surbma - GDPR Proof Cookies plugin through the 'Plugins' menu in WordPress
3. Go to settings page: Settings -> GDPR Proof Cookies
4. Set the Popup content, display options, tracking code settings and approve the Limited Liability option.
5. That's it. :)

== Frequently Asked Questions ==

= Is it really GDPR compatible? =

This plugin shows a simple popup for every new visitors with two options: accept or decline the cookie tracking. If the visitor declines tracking, cookie tracking codes won't activate. This plugin gives you all the tools to make your cookie tracking GDPR proof, but it is your responsibility to use it the right way.

= What does Surbma mean? =

It is the reverse version of my last name. ;)

== Changelog ==

= 7.0 =

- NEW - Changed plugin name: Surbma - GDPR Proof Cookies
- This is the new version of my previous Surbma - GDPR Proof Google Analytics plugin, which will add Google Remarketing, Facebook Pixel, Hotjar and other services. It will be a complete cookie management solution for WordPress.
- NEW - Shortcode, that can be used to give users the possibility to change their settings: [surbma-cookie-popup-link]
- NEW - Upcoming features list in the sidebar to let you know the future of the plugin.
- TWEAK - Modified admin area look. Preparing for the upcoming new features.

= 6.3 =

- FIX - Fixed method to get plugin info. It was generating errors for Pro users.
- TWEAK - New UIkit version added for the admin area.

= 6.2 =

- FIX - Localization fixes.

= 6.1 =

- FIX - Show the popup, when Debug mode is enabled and popup is disabled for logged in users.

= 6.0 =

- NEW - Added popup close without clicking on the buttons: button, ESC, background click.
- NEW - Added popup delay option.
- ENHANCED - Optimized script loading logic.
- ENHANCED - ESC button close is always enabled in Debug mode.
- ENHANCED - Popup is not loading in admin area, only on login page, if admin tracking is enabled.
- TWEAK - Minor admin CSS changes.
- FIX - Corrected modal values.

= 5.1 =

- FIX - Freemius mechanism added to prevent conflicts with premium version.

= 5.0 =

- ENHANCED - Popup buttons are not refreshing the page. Accept button still sends the hit to Google Analytics.
- ENHANCED - Settings page sidebar is updated with Google's latest websites about GDPR.
- TWEAK - General admin notice is removed. A more informational alert is added to the plugin's settings page.
- FIX - Internationalization fixes.
- FIX - Admin URLs are fixed to work with every WordPress configuration.

= 4.3 =

- FIX Unique JavaScript function names to avoid conflicts with other plugins.

= 4.2 =

- FIX Settings validation error.
- ENHANCED Popup load conditions.

= 4.1 =

- FIX Freemius sandbox mode removed.

= 4.0 =

- ENHANCED Debug mode has the option to close popup with ESC or clicking on the background.
- ENHANCED A lot of code optimization.
- FIX Popup related JavaScript codes are reordered.

= 3.2 =

- FIX Localization fixes.

= 3.1 =

- FIX The Limited Liability option notice.
- FIX Text sanitization an validation.
- FIX Minor code fixes.
- CHANGED Removed Affiliate banner from sidebar.

= 3.0 =

- NEW Pro version upgrade feature is available in the plugin's admin menu. Use BEFOREGDPR coupon to get 50% off till May 26, 2018.
- ENHANCED Plugin activation hook.
- ENHANCED Code optimization for settings page.
- ENHANCED Settings page display for Free users.
- FIXED Loading logic for admin and login pages.

= 2.1 =

- Main plugin file is renamed to prepare for merging free and pro versions to one plugin.
- Fix README plugin name.

= 2.0 =

- Added Freemius service to manage premium version and payment system.
- Preparing to merge free and pro codes to one plugin.

= 1.1 =

- Top-Level Menu.
- Preparing the sidebar to have relevant informations.
- Simple versioning.

= 1.0.0 =

- Initial commit.
