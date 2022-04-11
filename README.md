# Kirby CMS + Vite Starterkit

## Features

- Based
  on [asnoson's](https://github.com/arnoson) [Kirby Vite Basic Kit](https://github.com/arnoson/kirby-vite-basic-kit);
  many thanks!
- ⚡️ Uses [Vite](https://vitejs.dev/) with [kirby-vite](https://github.com/arnoson/kirby-vite) plugin
- 🔄 Live Reloading for Kirby templates, snippets, content, ... changes
- 📂 [Public folder structure](https://getkirby.com/docs/guide/configuration#custom-folder-setup__public-folder-setup)
- Includes [TailwindCSS](https://tailwindcss.com/), [ESLint](https://eslint.org/), [Prettier](https://prettier.io/)
  and [TypeScript](https://www.typescriptlang.org/)

## Installation

Clone this repository and run:

```
composer install
```

```
npm install
```

## Development

Start vite's dev server and a simple php dev server by running:

```
npm run dev
```

Visit `localhost:8888` in the browser. Vite's dev server (`localhost:3000`) is only used for serving js, css and assets.

## Production

Build your optimized frontend assets to `public/dist`:

```
npm run build
```

## Deployment

### Manually

Upload the repository to your web server and point your web server to the repository's `public` folder.

### Rsync

If you have ssh access you can use rsync to automate the upload/sync.

### Git

You can also deploy your repository with git. Then you have to run the [installation](#installation) steps again on your
web server.
