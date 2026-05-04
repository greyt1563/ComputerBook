# Books Library for GitHub Pages

This repository contains a static library of PDF books organized by folders.

GitHub Pages does not support PHP, so the original `index.php` directory listing files cannot run on `github.io`. To make the library browsable online, this repo uses generated `index.html` files inside each folder.

## How it works

- Each folder gets an `index.html` file.
- That file lists the subfolders and files inside that folder.
- PDF files open directly from the GitHub Pages site.

## Publish on GitHub Pages

1. Create a GitHub repository.
2. Upload all files and folders from this directory.
3. In the GitHub repository, open `Settings` > `Pages`.
4. Set the source to deploy from the main branch root.
5. Save and wait for the site to publish.

Your site URL will look like:

```text
https://YOUR-USERNAME.github.io/YOUR-REPOSITORY/
```

## Update the folder listings

If you add, remove, or rename books or folders, regenerate the HTML index files:

```powershell
powershell -ExecutionPolicy Bypass -File .\generate-gh-pages-indexes.ps1
```

Then commit the updated `index.html` files.

## Notes

- `index.php` files are kept only as old local/server compatibility files.
- GitHub Pages will serve the generated `index.html` files, not the PHP files.
- `.nojekyll` is included so GitHub Pages serves files directly without Jekyll processing.
