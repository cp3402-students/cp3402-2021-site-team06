[<-- Back to README](README.md)

# Group 6 Jazzy Theme Documentation
## About this theme

---

The elements of the 'Jazzy theme' were designed to reflect the classical and sophisticated feelings largely associated with the Jazz music scene. The theme takes much inspiration from the design of multiple popular musical websites. 

This theme includes plugins that are implementated to manage social media icons, ?? an easy to create front page ?? and append additional customizer options to the default WordPress customizer.

## Customizer Options

---

Once you are in the WordPress customizer (If you are unsure on how to access the customizer look [here](https://www.wpbeginner.com/beginners-guide/how-to-use-wordpress-theme-customizer/)).

In order to make the most out of the theme, head into **Home Page Settings** and select a static page. The theme works the best with a static page! You can create this home pages normally, in the WordPress page creator.

Under **Site Identity** you will find options for the site title, tagline, **logo** and the site icon. A unique feature with the *Jazzy Theme* is that this **logo** section will add your desired logo into the navbar. In the case there is no logo selected the website title will be placed there instead. *(We recommend a square image that will fit the header section properly)*

![Logo location in customizer and website](/images/logoimage.png)

## Menu Options

---
There are 2 possible locations for the website's menu, the header and the footer. The theme currently only has the menu enabled in the header. Modifications to the locations and contents of the menu can be made by navigating into the *Menus* section under *Appearance* in the WordPress dashboard.

![Location of menu settings](/images/menuimage.PNG)

- **Header bottom menu** is the menu used in the header.
- **Footer menu** is the menu used for the footer. *(Note there will always be a "go to top" part and social icons, unless changed in the plugins)*

## Social Icons

---

The plugin, [Easy Social Icons](https://en-au.wordpress.org/plugins/easy-social-icons/), was used to implement social media icons. This allowed for a wide variety of icons to be implemented easily and quickly. In the *footer.php* you will find the following code.

```
<?php if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?>
```

This code searches to see if the plugin is active and has icons. If you no longer desire icons or want to change them, you can find options for modifying and removing icons in the plugin's settings which can be navigated to from the WordPress admin dashboard. *Easy Social Icons* elements can also be implemented on pages with the following shortcode:

```
[cn-social-icon]
```

## Styling & Functions
---
### Styling
---
The prominent styling features that can be seen throughout the website can be found and modified at the bottom of the 'style.css' and/or 'style.scss' files.
#### Styling with SASS
The style sheet, 'style.css' was generated from the 'style.scss' file using the preprocessor scripting language **SASS**. Generating the 'style.css' file in this manner allowed us to create variables for the websites various style constants such as colours and fonts. With these variables in place, modifications were streamlined and, for example, changes to colours that are used by the website's various components can be made through a single line of code. More infomation on how to utilize SASS for website development can be found on the language's [official website](https://sass-lang.com/documentation).

Relevant files:
* style.scss - Style sheet that contains Sass language, used to compile styles.css.
* colours.scss - Contains the modifiable colour variables.
* text.scss - Contains the modifiable font variables.

#### Styling with CSS directly
The styling can also be modified by editing the CSS code in the file 'styling.css' directly.

### Functions
The functions derived from the starter theme '_tk'_ were lightly modified and any additional content added for our themes specific functionality can be found at the bottom of the documents. *insert list of relevant files and what modification can be made through them*

## Other  

---
Descriptive comments can be found throughout the theme's specific function files (header.php, footer.php and page.php) and styling file (style.scss). These comments are useful for understanding how certain functions or lines of code affect the website. We advise to not edit these files until you understand how each component is implemented.

[<-- Back to README](README.md)
