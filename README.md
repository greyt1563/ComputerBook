# ComputerBook

A browsable digital library of computer science, technology, mathematics, and academic reference books, organized as a static GitHub Pages site.

## Live Library

Visit the library here:

[https://greyt1563.github.io/ComputerBook/](https://greyt1563.github.io/ComputerBook/)

## Highlights

- Organized collections for CBSE, ICSE, WBCHSE, technical subjects, and other references.
- Static folder listings generated as `index.html` files for GitHub Pages.
- Large PDF files are stored with Git LFS and opened through GitHub raw file links.
- GitHub Actions automatically publishes the site after changes are pushed to `main`.

## Repository Structure

```text
ComputerBook/
|-- CBSE/
|-- ICSE/
|-- OTHERS/
|-- TECH/
|-- WBCHSE/
|-- .github/workflows/
|-- 404.html
|-- index.html
`-- README.md
```

## How Publishing Works

GitHub Pages serves the generated HTML pages, while PDF links redirect to GitHub's raw/LFS file URLs. This avoids the GitHub Pages limitation where LFS files are otherwise published as pointer files instead of real PDFs.

The deployment workflow is defined in:

```text
.github/workflows/static.yml
```

## Maintenance

When adding, removing, or renaming folders or books, regenerate the static folder listings and commit the updated files.

Keep temporary files such as `desktop.ini`, incomplete downloads, and local build output out of the repository.

## Notes

- `index.php` files are retained only for old local/server compatibility.
- GitHub Pages uses `index.html`, not PHP.
- `.nojekyll` is included so GitHub Pages serves files directly without Jekyll processing.
