using System.Configuration;
using NUnit.Framework;
using WCMS.UITestEngine;

namespace WCMS.SystemTests
{
  [SetUpFixture]
  class SetupFixture : BaseSetupFixture
  {
    [SetUp]
    public void Setup()
    {
      DefaultSetUp(ConfigurationManager.AppSettings["TestWebBrowser"]);
    }

    [TearDown]
    public void TearDown()
    {
      DefaultTearDown();
    }
  }
}
