# Acnespecialisten homepage

## Creating a new page
- Create a PHP file *my-folder/my-new-page*.php
- Create a (S)CSS file *my-folder/my-new-page*.(s)css
- Copy the contents of *template.php* into the new file
- Complete all the TODOs listed in the file (set language, title and meta, etc)
- Put your html content between the \<main> tags only
- Put your style content inside the new css file only
- Custom javascript is added manually

## Best practices
- Prefer using the build-in css classes as much as possible (custom css is harder to maintain)
- Use variables instead of magic numbers: *margin-top: **$xs*** (not ***8px***)
- Localized content should have the **l10n** class, for example; **\<p class="l10n">Hasta la vista\</p>**
- Use next-gen file formats and keep file sizes reasonable
- Always specify image **alt** and **size** attributes
- Analyze the page (using for Lighthouse tools for example) before deploying