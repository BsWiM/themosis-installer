<?php

namespace spec\MVPDesign\ThemosisInstaller;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ConfigSpec extends ObjectBehavior
{
    /**
     * it is initializable
     *
     * @return void
     */
    public function it_is_initializable()
    {
        $this->shouldHaveType('MVPDesign\ThemosisInstaller\Config');
    }

    /**
     * it should return a database name
     *
     * @return void
     */
    public function it_should_return_a_database_name()
    {
        $this->getDbName()->shouldReturn(null);
    }

    /**
     * it should set a database name
     *
     * @return void
     */
    public function it_should_set_a_database_name()
    {
        $dbName = Argument::type('string');

        $this->setDbName($dbName);
        $this->getDbName()->shouldReturn($dbName);
    }

    /**
     * it should return a database user
     *
     * @return void
     */
    public function it_should_return_a_database_user()
    {
        $this->getDbUser()->shouldReturn(null);
    }

    /**
     * it should set a database user
     *
     * @return void
     */
    public function it_should_set_a_database_user()
    {
        $dbUser = Argument::type('string');

        $this->setDbUser($dbUser);
        $this->getDbUser()->shouldReturn($dbUser);
    }

    /**
     * it should return a database password
     *
     * @return void
     */
    public function it_should_return_a_database_password()
    {
        $this->getDbPassword()->shouldReturn(null);
    }

    /**
     * it should set a database password
     *
     * @return void
     */
    public function it_should_set_a_database_password()
    {
        $dbPassword = Argument::type('string');

        $this->setDbPassword($dbPassword);
        $this->getDbPassword()->shouldReturn($dbPassword);
    }

    /**
     * it should return a database host
     *
     * @return void
     */
    public function it_should_return_a_database_host()
    {
        $this->getDbHost()->shouldReturn('localhost');
    }

    /**
     * it should set a database host
     *
     * @return void
     */
    public function it_should_set_a_database_host()
    {
        $dbHost = Argument::type('string');

        $this->setDbHost($dbHost);
        $this->getDbHost()->shouldReturn($dbHost);
    }

    /**
     * it should return a database prefix
     *
     * @return void
     */
    public function it_should_return_a_database_prefix()
    {
        $this->getDbPrefix()->shouldReturn('mvpwp_');
    }

    /**
     * it should set a database prefix
     *
     * @return void
     */
    public function it_should_set_a_database_prefix()
    {
        $dbPrefix = Argument::type('string');

        $this->setDbPrefix($dbPrefix);
        $this->getDbPrefix()->shouldReturn($dbPrefix);
    }

    /**
     * it should return a environment
     *
     * @return void
     */
    public function it_should_return_a_environment()
    {
        $this->getEnvironment()->shouldReturn('local');
    }

    /**
     * it should set a valid environment
     *
     * @return void
     */
    public function it_should_set_a_valid_environment()
    {
        $environments = array(
            'local',
            'staging',
            'production'
        );

        foreach ($environments as $environment) {
            $this->setEnvironment($environment);
            $this->getEnvironment()->shouldReturn($environment);
        }
    }

    /**
     * it should not set an invalid environment
     *
     * @return void
     */
    public function it_should_not_set_an_invalid_environment()
    {
        $environment = 'invalid_environment';

        $this->shouldThrow('\MVPDesign\ThemosisInstaller\InvalidEnvironmentException')->duringSetEnvironment($environment);
    }

    /**
     * it should return a site url
     *
     * @return void
     */
    public function it_should_return_a_site_url()
    {
        $this->getSiteUrl()->shouldReturn('http://localhost');
    }

    /**
     * it should set a site url
     *
     * @return void
     */
    public function it_should_set_a_site_url()
    {
        $siteUrl = Argument::type('string');

        $this->setSiteUrl($siteUrl);
        $this->getSiteUrl()->shouldReturn($siteUrl);
    }

    /**
     * it should return a site title
     *
     * @return void
     */
    public function it_should_return_a_site_title()
    {
        $this->getSiteTitle()->shouldReturn(null);
    }

    /**
     * it should set a site title
     *
     * @return void
     */
    public function it_should_set_a_site_title()
    {
        $siteTitle = Argument::type('string');

        $this->setSiteTitle($siteTitle);
        $this->getSiteTitle()->shouldReturn($siteTitle);
    }

    /**
     * it should return a namespace slug
     *
     * @return void
     */
    public function it_should_return_a_namespace_slug()
    {
        $siteTitle = 'a String';
        $siteSlug = 'AString';

        $this->setSiteTitle($siteTitle);
        $this->getNamespaceSlug()->shouldReturn($siteSlug);
    }

    /**
     * it should return a site slug
     *
     * @return void
     */
    public function it_should_return_a_site_slug()
    {
        $siteTitle = 'a String';
        $siteSlug = 'a-string';

        $this->setSiteTitle($siteTitle);
        $this->getSiteSlug()->shouldReturn($siteSlug);
    }

    /**
     * it should return a site description
     *
     * @return void
     */
    public function it_should_return_a_site_description()
    {
        $this->getSiteDescription()->shouldReturn(null);
    }

    /**
     * it should set a site description
     *
     * @return void
     */
    public function it_should_set_a_site_description()
    {
        $siteDescription = Argument::type('string');

        $this->setSiteDescription($siteDescription);
        $this->getSiteDescription()->shouldReturn($siteDescription);
    }

    /**
     * it should return is site public
     *
     * @return void
     */
    public function it_should_return_is_site_public()
    {
        $this->isSitePublic()->shouldReturn(false);
    }

    /**
     * it should set is site public
     *
     * @return void
     */
    public function it_should_set_is_site_public()
    {
        $isSitePublic = true;

        $this->setIsSitePublic($isSitePublic);
        $this->isSitePublic()->shouldReturn($isSitePublic);
    }

    /**
     * it should return an admin user
     *
     * @return void
     */
    public function it_should_return_an_admin_user()
    {
        $this->getAdminUser()->shouldReturn(null);
    }

    /**
     * it should set an admin user
     *
     * @return void
     */
    public function it_should_set_an_admin_user()
    {
        $adminUser = Argument::type('string');

        $this->setAdminUser($adminUser);
        $this->getAdminUser()->shouldReturn($adminUser);
    }

    /**
     * it should return an admin password
     *
     * @return void
     */
    public function it_should_return_an_admin_password()
    {
        $this->getAdminPassword()->shouldReturn(null);
    }

    /**
     * it should set an admin password
     *
     * @return void
     */
    public function it_should_set_an_admin_password()
    {
        $adminPassword = Argument::type('string');

        $this->setAdminPassword($adminPassword);
        $this->getAdminPassword()->shouldReturn($adminPassword);
    }

    /**
     * it should return an admin email
     *
     * @return void
     */
    public function it_should_return_an_admin_email()
    {
        $this->getAdminEmail()->shouldReturn(null);
    }

    /**
     * it should set an admin email
     *
     * @return void
     */
    public function it_should_set_an_admin_email()
    {
        $adminEmail = Argument::type('string');

        $this->setAdminEmail($adminEmail);
        $this->getAdminEmail()->shouldReturn($adminEmail);
    }

    /**
     * it should return salts
     *
     * @return void
     */
    public function it_should_return_salts()
    {
        $this->getSalts()->shouldbeArray();
    }

    /**
     * it should set a salt for keys that do exist
     *
     * @return void
     */
    public function it_should_set_a_salt_for_keys_that_do_exist()
    {
        $keys = array(
            'AUTH_KEY',
            'SECURE_AUTH_KEY',
            'LOGGED_IN_KEY',
            'NONCE_KEY',
            'AUTH_SALT',
            'SECURE_AUTH_SALT',
            'LOGGED_IN_SALT',
            'NONCE_SALT'
        );

        foreach($keys as $key) {
            $salt = Argument::type('string');

            $this->setSalt($key, $salt);
            $this->getSalt($key)->shouldReturn($salt);
        }
    }

    /**
     * it should not set a salt for keys that do not exist
     *
     * @return void
     */
    public function it_should_not_set_a_salt_for_keys_that_do_not_exist()
    {
        $key  = 'INVALID_KEY';
        $salt = Argument::type('string');

        $this->setSalt($key, $salt);
        $this->getSalt($key)->shouldReturn(false);
    }
}
