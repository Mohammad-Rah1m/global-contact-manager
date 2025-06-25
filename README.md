# 📞 Global Contact Manager

A lightweight WordPress plugin to manage and reuse your site's global contact information — like phone numbers, email, and physical address — via shortcodes. Update once, reflect everywhere.

---

## ✨ Features

- Admin panel to set global contact details
- Easy-to-use shortcodes to embed contact info
- Changes reflect site-wide instantly
- Secure, sanitized inputs and output
- No external dependencies or bloat

---

## ⚙️ Installation

1. Download this plugin or clone it via Git:
   ```bash
   git clone https://github.com/yourusername/global-contact-manager.git
2. Upload the plugin folder to /wp-content/plugins/
3. Go to WordPress Admin → Plugins → Activate Global Contact Manager
4. Go to Settings → Contact Info to enter your global contact details

## 🔌 Available Shortcodes

1. [global_primary_phone]
2. [global_secondary_phone]
3. [global_email_address]
4. [global_address]

## 🛡 Security & Code Quality

1. Input is sanitized using sanitize_text_field() and sanitize_email()
2. Output is escaped with esc_html() and esc_attr()
3. Plugin is namespaced to avoid function name collisions
4. Follows WordPress coding standards

