# azure-php-helloworld

This is my first project in my attempt to learn cloud skills.

This is a super simple webpage that I pushed up to Azure App Services. I focused more on getting something up and working than focusing on languages or fancy frameworks or whatever. The sample project just had a "hello world" and I made it a little more fancy. (Only a little...)

## Quick Deploy Steps

1. Get the repo: `git clone https://github.com/geekygirlsarah/azure-php-helloworld.git`
2. Change into that directory: `cd azure-php-helloworld`
3. Test it locally: `php -S localhost:8080`
4. Log in to Azure: `az login`
5. Create a new git deployment user: `az webapp deployment user set --user-name <username> --password <password>`
6. Create a resource group: `az group create --name <resourceGroup> --location <location>`
  * name the Resource Group whatever you like, but remember that name as you'll use it a lot
  * use `az appservice list-locations` to get a list of possible locations you can use
7. Create a new App Service plan attached to that Resource Group: `az appservice plan create --name <servicePlanName>
  * Name the Service Plan whatever you like, just remember the name of it
8. Create a web app on that Service Plan: `az webapp create --name <appName> --resource-group <resourceGroup> --plan <servicePlanName>`
  * Whatever you name the web app will be the name of your website. So `myHelloWorldApp` will go to `http://myHelloWorldApp.azurewebsites.net`.
9. Test the site out by to that link. You should get a default Azure page.
10. Get the App Service git push URL: `az webapp deployment source config-local-git --name <appName> --resource-group <resourceGroupName> --query url --output tsv`
  * Copy that URL. You'll need it in the next step.
  * The username is between the `https://` and `@appname.scm`
11. Add Azure as a git remote: `git remote add azure <URL>
12. Push your repo to Azure's master branch: `git push azure master`
13. Go to the same URL for your web app (created in step 8) and test to see if it works. You should see some text, a text box, and a submit button.
14. Make your own changes and try it out!


## Demo
http://geekygirlsarah-helloworld.azurewebsites.net/

## Original Instructions and Repo
Directions: https://docs.microsoft.com/en-us/azure/app-service-web/app-service-web-get-started-php
Repo: https://github.com/Azure-Samples/php-docs-hello-world

## Contributing

This project has adopted the [Microsoft Open Source Code of Conduct](https://opensource.microsoft.com/codeofconduct/). For more information see the [Code of Conduct FAQ](https://opensource.microsoft.com/codeofconduct/faq/) or contact [opencode@microsoft.com](mailto:opencode@microsoft.com) with any additional questions or comments.

## Contact

Find me on Twitter at [@geekygirlsarah](https://twitter.com/geekygirlsarah). Please feel free to reach out!
