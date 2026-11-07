# Sweat & Tears

## 1. Project Overview
Sweat & Tears is a website project designed to showcase products and provide information about the business.

## 2. Project Objectives
- Create a user-friendly website.
- Display products through a gallery page.
- Provide information about the business.
- Allow users to navigate between different pages.

## 3. Technologies Used
- HTML
- CSS
- PHP
- Laravel
- Git and GitHub

## 4. Website Features
- Home Page
- About Page
- Gallery Page
- Product Images
- Navigation Menu

## 5. Project Folder Structure
- app/ - Application logic
- public/ - Public assets and images
- resources/views/ - Website pages
- routes/ - Website routes
- docs/ - Project documentation

## 6. Merge conflicts
While merging [PR name/number, e.g. the layout PR #5] into main, GitHub reported
conflicts in three files: resources/views/about.blade.php,
resources/views/contact.blade.php and routes/web.php The conflicts happened because both branches had edited these files separately. On main, the About and Contact pages were plain standalone HTML pages (with their own <!DOCTYPE html>, <head> and <body>), while on feature/layout they had been converted to Blade views that use the shared layout (@extends('layouts.app') with @section blocks). Git could not decide which version to keep.

I resolved the conflicts using GitHub’s conflict editor. For each file I compared both versions, kept the feature/layout version with the new layout and the styled About and Contact content, and removed the conflict markers along with the old plain HTML from main. In routes/web.php I kept the routes needed for the pages. After marking all three files as resolved, I committed the merge, checked that the About and Contact pages still loaded correctly with the new layout, and merged the pull request.

## 7. Installation Instructions
1. Install Laravel Herd and open it.
2. Clone the repo into your Herd sites folder:
   `git clone https://github.com/RaySalim/iibGroup4-BST 
3. Run composer install, copy .env.example to .env, then run php artisan key:generate.
4. In Herd, secure the site so it is served at https://iibgroup4.test with a trusted certificate.
5. Open https://iibgroup4.test in your browser.


## 8. Team Contributions
1. Suraya - Main Website Development
  - Worked on the overall website structure and layout
  - Integrated the different sections to ensure consistent navigation and functionality.

2. Rabi - About and Contact page
  - Designed and developed the About page.
  - Created Contact page.
  - Organised the content and layout of both pages.

3. Fateen - Gallery Page and Documentation
  - Designed and developed the Gallery page.
  - Created and organised the project README documentation.

4. Team collaboration
  - All members collaborated throughout the development process by reviewing each other's work, resolving Git merge conflicts, testing website functinality, and merging changes through GitHub Pull Requests.

  ## 9. Self Reflection

1. Suraya - In this project I worked on the main website development. I built the shared layout that every page uses, wrote the CSS and JavaScript, and integrated the different sections so that navigation and functionality stay consistent across the site. I submitted this work through a Pull Request into main. Through this I learned that working with branches and Pull Requests keeps everyone’s work safe, because nobody changes main directly and a teammate reviews each change first. I also learned that conflicts are normal in team projects and are easier to fix when we talk to each other and make smaller, more frequent commits. One challenge our team overcame was a merge conflict that happened when one of us edited the same shared files on different branches. I fixed it by reading both versions, keeping the parts we needed, removing the conflict markers and testing the pages before merging. Next time, I would pull the latest main before starting a new branch to avoid it.\

2. Rabi - My contributions to the project included creating the About and Contact sections of the website and making changes to the PHP code using Visual Studio Code. During this project, I gained a better understanding of Git, particularly how to use commits, create Pull Requests, and merge changes. I also learned the importance of communication and teamwork when working with my teammates to complete the project. One of the main challenges we encountered was dealing with merge conflicts when combining everyone's contributions. Overall, this experience strengthened my programming abilities, improved my understanding of Git, and taught me how to collaborate more effectively with others.

3. Fateen - My main contributions to the project were developing the Gallery page, adding product images, and creating the README documentation. I faced some difficulties with image file paths and displaying pictures correctly, which I overcame by checking the folder structure. Through this project, I learned how to use commits and Pull Requests to collaborate with my teammates. One challenge we overcame was resolving merge conflicts while combining everyone's work. Overall, this project improved my coding and teamwork skills.

## 10. Git Workflow
- main is protected, so nobody pushes to it directly.
- Every change uses a short-lived branch named type/description, e.g. feature/contact, docs/readme.
- Steps: branch, commit, push, open a Pull Request, a teammate reviews it, then merge.
- Final release tagged v1.0.