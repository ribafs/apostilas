# Instalação do Monaca

sudo npm install -g monaca

## Templates disponíveis:

- Vue
- React
- Angular2
- Sem framework

## Criar um .monacaignore em cada projeto. Exemplo:
```bash
/.monaca/*
!/.monaca/project_info.json
/platforms
.DS_Store
*.swp
.vscode/
typings/
node_modules
.git
```

```bash
monaca login

monaca create PROJECT_DIRECTORY

mkdir monaca
cd monaca

monaca create agenda
Type "cd agenda" and run monaca command again.
  > monaca preview      => Run app in the browser
  > monaca debug        => Run app in the device using Monaca Debugger
  > monaca remote build => Start remote build for iOS/Android/Windows
  > monaca upload       => Upload this project to Monaca Cloud IDE
cd agenda

monaca remote build --build-list` to get all the remote builds
```
You can also use USB debugging with Monaca CLI. Please refer to USB Debugging with Monaca . 

https://docs.monaca.io/en/tutorials/monaca_cli/building_app/

monaca remote build --browser

From the build interface under the App Settings on the left menu, select Android.

In order to configure a new Android KeyStore in Monaca, please do as follows:

    From the build interface under the Build & Build Settings on the left menu, select Android. Then, choose Build for Release and select Manage KeyStore and Alias.

The KeyStore can either be created or imported. In this tutorial, we assume that you need to create a new KeyStore. Therefore, click on Clear and Generate New button. Then, the following screen will appear:

## Building the App

    From the build interface under the Build & Build Settings on the left menu, select Android. Then, select the Debug Build option. Then, click Start Build button.

Installing the Built App

There are 5 ways you can install the built app such as:

    using Network Install
    install via QR Barcode.
    downloading the built app directly to your computer and installing it via USB cable.
    sending the URL to download the built app to your registered email address.
    installing via configured deployment services.

https://docs.monaca.io/en/products_guide/monaca_ide/build/build_android/

https://docs.monaca.io/en/products_guide/monaca_ide/deploy/appstore/app_store_connect/

https://docs.monaca.io/en/products_guide/monaca_ide/deploy/google_play/

https://docs.monaca.io/en/products_guide/migration/phonegap_migration/

Alternativas para phonegap

There are also a number of alternative products to which you may want to consider migrating your PhoneGap app including:
- Monaca (refer to their PhoneGap Migration Guide) & Onsen UI (front-end UI framework)
- Framework7
- NativeScript
- Ionic Capacitor
- Progressive Web Apps
