<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class CachedCiviContainer extends Container
{
    private $parameters;
    private $targetDirs = [];

    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services = [];
        $this->normalizedIds = [
            'civi.case.statictriggers' => 'civi.case.staticTriggers',
            'httpclient' => 'httpClient',
            'lockmanager' => 'lockManager',
            'userpermissionclass' => 'userPermissionClass',
            'usersystem' => 'userSystem',
        ];
        $this->syntheticIds = [
            'cache.settings' => true,
            'lockManager' => true,
            'paths' => true,
            'runtime' => true,
            'settings_manager' => true,
            'userPermissionClass' => true,
            'userSystem' => true,
        ];
        $this->methodMap = [
            'angular' => 'getAngularService',
            'asset_builder' => 'getAssetBuilderService',
            'cache.checks' => 'getCache_ChecksService',
            'cache.community_messages' => 'getCache_CommunityMessagesService',
            'cache.default' => 'getCache_DefaultService',
            'cache.js_strings' => 'getCache_JsStringsService',
            'cache.long' => 'getCache_LongService',
            'cache.session' => 'getCache_SessionService',
            'cache_config' => 'getCacheConfigService',
            'civi.activity.triggers' => 'getCivi_Activity_TriggersService',
            'civi.case.staticTriggers' => 'getCivi_Case_StaticTriggersService',
            'civi.case.triggers' => 'getCivi_Case_TriggersService',
            'civi.mailing.triggers' => 'getCivi_Mailing_TriggersService',
            'civi_api_kernel' => 'getCiviApiKernelService',
            'civi_container_factory' => 'getCiviContainerFactoryService',
            'civi_token_compat' => 'getCiviTokenCompatService',
            'crm_activity_tokens' => 'getCrmActivityTokensService',
            'crm_contribute_tokens' => 'getCrmContributeTokensService',
            'crm_event_tokens' => 'getCrmEventTokensService',
            'crm_mailing_action_tokens' => 'getCrmMailingActionTokensService',
            'crm_mailing_tokens' => 'getCrmMailingTokensService',
            'crm_member_tokens' => 'getCrmMemberTokensService',
            'cxn_reg_client' => 'getCxnRegClientService',
            'dispatcher' => 'getDispatcherService',
            'httpClient' => 'getHttpClientService',
            'i18n' => 'getI18nService',
            'magic_function_provider' => 'getMagicFunctionProviderService',
            'pear_mail' => 'getPearMailService',
            'prevnext' => 'getPrevnextService',
            'prevnext.driver.redis' => 'getPrevnext_Driver_RedisService',
            'prevnext.driver.sql' => 'getPrevnext_Driver_SqlService',
            'psr_log' => 'getPsrLogService',
            'resources' => 'getResourcesService',
            'sql_triggers' => 'getSqlTriggersService',
        ];
        $this->privates = [
            'cache.short' => true,
            'angular' => true,
            'asset_builder' => true,
            'cache.checks' => true,
            'cache.community_messages' => true,
            'cache.default' => true,
            'cache.js_strings' => true,
            'cache.long' => true,
            'cache.session' => true,
            'cache.settings' => true,
            'cache_config' => true,
            'civi.activity.triggers' => true,
            'civi.case.staticTriggers' => true,
            'civi.case.triggers' => true,
            'civi.mailing.triggers' => true,
            'civi_api_kernel' => true,
            'civi_container_factory' => true,
            'civi_token_compat' => true,
            'crm_activity_tokens' => true,
            'crm_contribute_tokens' => true,
            'crm_event_tokens' => true,
            'crm_mailing_action_tokens' => true,
            'crm_mailing_tokens' => true,
            'crm_member_tokens' => true,
            'cxn_reg_client' => true,
            'dispatcher' => true,
            'httpClient' => true,
            'i18n' => true,
            'lockManager' => true,
            'magic_function_provider' => true,
            'paths' => true,
            'pear_mail' => true,
            'prevnext' => true,
            'prevnext.driver.redis' => true,
            'prevnext.driver.sql' => true,
            'psr_log' => true,
            'resources' => true,
            'runtime' => true,
            'settings_manager' => true,
            'sql_triggers' => true,
            'userPermissionClass' => true,
            'userSystem' => true,
        ];
        $this->aliases = [
            'cache.short' => 'cache.default',
        ];
    }

    public function getRemovedIds()
    {
        return [
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'angular' => true,
            'asset_builder' => true,
            'cache.checks' => true,
            'cache.community_messages' => true,
            'cache.default' => true,
            'cache.js_strings' => true,
            'cache.long' => true,
            'cache.session' => true,
            'cache.settings' => true,
            'cache.short' => true,
            'cache_config' => true,
            'civi.activity.triggers' => true,
            'civi.case.staticTriggers' => true,
            'civi.case.triggers' => true,
            'civi.mailing.triggers' => true,
            'civi_api_kernel' => true,
            'civi_container_factory' => true,
            'civi_token_compat' => true,
            'crm_activity_tokens' => true,
            'crm_contribute_tokens' => true,
            'crm_event_tokens' => true,
            'crm_mailing_action_tokens' => true,
            'crm_mailing_tokens' => true,
            'crm_member_tokens' => true,
            'cxn_reg_client' => true,
            'dispatcher' => true,
            'httpClient' => true,
            'i18n' => true,
            'lockManager' => true,
            'magic_function_provider' => true,
            'paths' => true,
            'pear_mail' => true,
            'prevnext' => true,
            'prevnext.driver.redis' => true,
            'prevnext.driver.sql' => true,
            'psr_log' => true,
            'resources' => true,
            'runtime' => true,
            'settings_manager' => true,
            'sql_triggers' => true,
            'userPermissionClass' => true,
            'userSystem' => true,
        ];
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    /**
     * Gets the private 'angular' shared service.
     *
     * @return \Civi\Angular\Manager
     */
    protected function getAngularService()
    {
        return $this->services['angular'] = ${($_ = isset($this->services['civi_container_factory']) ? $this->services['civi_container_factory'] : ($this->services['civi_container_factory'] = new \Civi\Core\Container())) && false ?: '_'}->createAngularManager();
    }

    /**
     * Gets the private 'asset_builder' shared service.
     *
     * @return \Civi\Core\AssetBuilder
     */
    protected function getAssetBuilderService()
    {
        return $this->services['asset_builder'] = new \Civi\Core\AssetBuilder();
    }

    /**
     * Gets the private 'cache.checks' shared service.
     *
     * @return \CRM_Utils_Cache_Interface
     */
    protected function getCache_ChecksService()
    {
        return $this->services['cache.checks'] = \CRM_Utils_Cache::create(['name' => 'checks', 'type' => [0 => '*memory*', 1 => 'SqlGroup', 2 => 'ArrayCache']]);
    }

    /**
     * Gets the private 'cache.community_messages' shared service.
     *
     * @return \CRM_Utils_Cache_Interface
     */
    protected function getCache_CommunityMessagesService()
    {
        return $this->services['cache.community_messages'] = \CRM_Utils_Cache::create(['name' => 'community_messages', 'type' => [0 => '*memory*', 1 => 'SqlGroup', 2 => 'ArrayCache']]);
    }

    /**
     * Gets the private 'cache.default' shared service.
     *
     * @return \CRM_Utils_Cache
     */
    protected function getCache_DefaultService()
    {
        return $this->services['cache.default'] = \CRM_Utils_Cache::singleton();
    }

    /**
     * Gets the private 'cache.js_strings' shared service.
     *
     * @return \CRM_Utils_Cache_Interface
     */
    protected function getCache_JsStringsService()
    {
        return $this->services['cache.js_strings'] = \CRM_Utils_Cache::create(['name' => 'js_strings', 'type' => [0 => '*memory*', 1 => 'SqlGroup', 2 => 'ArrayCache']]);
    }

    /**
     * Gets the private 'cache.long' shared service.
     *
     * @return \CRM_Utils_Cache_Interface
     */
    protected function getCache_LongService()
    {
        return $this->services['cache.long'] = \CRM_Utils_Cache::create(['name' => 'long', 'type' => [0 => '*memory*', 1 => 'SqlGroup', 2 => 'ArrayCache']]);
    }

    /**
     * Gets the private 'cache.session' shared service.
     *
     * @return \CRM_Utils_Cache_Interface
     */
    protected function getCache_SessionService()
    {
        return $this->services['cache.session'] = \CRM_Utils_Cache::create(['name' => 'CiviCRM Session', 'type' => [0 => '*memory*', 1 => 'SqlGroup', 2 => 'ArrayCache']]);
    }

    /**
     * Gets the private 'cache_config' shared service.
     *
     * @return \ArrayObject
     */
    protected function getCacheConfigService()
    {
        return $this->services['cache_config'] = ${($_ = isset($this->services['civi_container_factory']) ? $this->services['civi_container_factory'] : ($this->services['civi_container_factory'] = new \Civi\Core\Container())) && false ?: '_'}->createCacheConfig();
    }

    /**
     * Gets the private 'civi.activity.triggers' shared service.
     *
     * @return \Civi\Core\SqlTrigger\TimestampTriggers
     */
    protected function getCivi_Activity_TriggersService()
    {
        return $this->services['civi.activity.triggers'] = new \Civi\Core\SqlTrigger\TimestampTriggers('civicrm_activity', 'Activity');
    }

    /**
     * Gets the private 'civi.case.staticTriggers' shared service.
     *
     * @return \Civi\Core\SqlTrigger\StaticTriggers
     */
    protected function getCivi_Case_StaticTriggersService()
    {
        return $this->services['civi.case.staticTriggers'] = new \Civi\Core\SqlTrigger\StaticTriggers([0 => ['upgrade_check' => ['table' => 'civicrm_case', 'column' => 'modified_date'], 'table' => 'civicrm_case_activity', 'when' => 'AFTER', 'event' => [0 => 'INSERT'], 'sql' => ''."\n".'UPDATE civicrm_case SET modified_date = CURRENT_TIMESTAMP WHERE id = NEW.case_id;'."\n".''], 1 => ['upgrade_check' => ['table' => 'civicrm_case', 'column' => 'modified_date'], 'table' => 'civicrm_activity', 'when' => 'BEFORE', 'event' => [0 => 'UPDATE', 1 => 'DELETE'], 'sql' => ''."\n".'UPDATE civicrm_case SET modified_date = CURRENT_TIMESTAMP WHERE id IN (SELECT ca.case_id FROM civicrm_case_activity ca WHERE ca.activity_id = OLD.id);'."\n".'']]);
    }

    /**
     * Gets the private 'civi.case.triggers' shared service.
     *
     * @return \Civi\Core\SqlTrigger\TimestampTriggers
     */
    protected function getCivi_Case_TriggersService()
    {
        return $this->services['civi.case.triggers'] = new \Civi\Core\SqlTrigger\TimestampTriggers('civicrm_case', 'Case');
    }

    /**
     * Gets the private 'civi.mailing.triggers' shared service.
     *
     * @return \Civi\Core\SqlTrigger\TimestampTriggers
     */
    protected function getCivi_Mailing_TriggersService()
    {
        return $this->services['civi.mailing.triggers'] = new \Civi\Core\SqlTrigger\TimestampTriggers('civicrm_mailing', 'Mailing');
    }

    /**
     * Gets the private 'civi_api_kernel' shared service.
     *
     * @return \Civi\API\Kernel
     */
    protected function getCiviApiKernelService()
    {
        return $this->services['civi_api_kernel'] = ${($_ = isset($this->services['civi_container_factory']) ? $this->services['civi_container_factory'] : ($this->services['civi_container_factory'] = new \Civi\Core\Container())) && false ?: '_'}->createApiKernel(${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['magic_function_provider']) ? $this->services['magic_function_provider'] : ($this->services['magic_function_provider'] = new \Civi\API\Provider\MagicFunctionProvider())) && false ?: '_'});
    }

    /**
     * Gets the private 'civi_container_factory' shared service.
     *
     * @return \Civi\Core\Container
     */
    protected function getCiviContainerFactoryService()
    {
        return $this->services['civi_container_factory'] = new \Civi\Core\Container();
    }

    /**
     * Gets the private 'civi_token_compat' shared service.
     *
     * @return \Civi\Token\TokenCompatSubscriber
     */
    protected function getCiviTokenCompatService()
    {
        return $this->services['civi_token_compat'] = new \Civi\Token\TokenCompatSubscriber();
    }

    /**
     * Gets the private 'crm_activity_tokens' shared service.
     *
     * @return \CRM_Activity_Tokens
     */
    protected function getCrmActivityTokensService()
    {
        return $this->services['crm_activity_tokens'] = new \CRM_Activity_Tokens();
    }

    /**
     * Gets the private 'crm_contribute_tokens' shared service.
     *
     * @return \CRM_Contribute_Tokens
     */
    protected function getCrmContributeTokensService()
    {
        return $this->services['crm_contribute_tokens'] = new \CRM_Contribute_Tokens();
    }

    /**
     * Gets the private 'crm_event_tokens' shared service.
     *
     * @return \CRM_Event_Tokens
     */
    protected function getCrmEventTokensService()
    {
        return $this->services['crm_event_tokens'] = new \CRM_Event_Tokens();
    }

    /**
     * Gets the private 'crm_mailing_action_tokens' shared service.
     *
     * @return \CRM_Mailing_ActionTokens
     */
    protected function getCrmMailingActionTokensService()
    {
        return $this->services['crm_mailing_action_tokens'] = new \CRM_Mailing_ActionTokens();
    }

    /**
     * Gets the private 'crm_mailing_tokens' shared service.
     *
     * @return \CRM_Mailing_Tokens
     */
    protected function getCrmMailingTokensService()
    {
        return $this->services['crm_mailing_tokens'] = new \CRM_Mailing_Tokens();
    }

    /**
     * Gets the private 'crm_member_tokens' shared service.
     *
     * @return \CRM_Member_Tokens
     */
    protected function getCrmMemberTokensService()
    {
        return $this->services['crm_member_tokens'] = new \CRM_Member_Tokens();
    }

    /**
     * Gets the private 'cxn_reg_client' shared service.
     *
     * @return \Civi\Cxn\Rpc\RegistrationClient
     */
    protected function getCxnRegClientService()
    {
        return $this->services['cxn_reg_client'] = \CRM_Cxn_BAO_Cxn::createRegistrationClient();
    }

    /**
     * Gets the private 'dispatcher' shared service.
     *
     * @return \Civi\Core\CiviEventDispatcher
     */
    protected function getDispatcherService()
    {
        $this->services['dispatcher'] = $instance = ${($_ = isset($this->services['civi_container_factory']) ? $this->services['civi_container_factory'] : ($this->services['civi_container_factory'] = new \Civi\Core\Container())) && false ?: '_'}->createEventDispatcher($this);

        $instance->addListener('hook_civicrm_triggerInfo', [0 => function () {
            return ${($_ = isset($this->services['civi.mailing.triggers']) ? $this->services['civi.mailing.triggers'] : ($this->services['civi.mailing.triggers'] = new \Civi\Core\SqlTrigger\TimestampTriggers('civicrm_mailing', 'Mailing'))) && false ?: '_'};
        }, 1 => 'onTriggerInfo'], 0);
        $instance->addListener('hook_civicrm_triggerInfo', [0 => function () {
            return ${($_ = isset($this->services['civi.activity.triggers']) ? $this->services['civi.activity.triggers'] : ($this->services['civi.activity.triggers'] = new \Civi\Core\SqlTrigger\TimestampTriggers('civicrm_activity', 'Activity'))) && false ?: '_'};
        }, 1 => 'onTriggerInfo'], 0);
        $instance->addListener('hook_civicrm_triggerInfo', [0 => function () {
            return ${($_ = isset($this->services['civi.case.triggers']) ? $this->services['civi.case.triggers'] : ($this->services['civi.case.triggers'] = new \Civi\Core\SqlTrigger\TimestampTriggers('civicrm_case', 'Case'))) && false ?: '_'};
        }, 1 => 'onTriggerInfo'], 0);
        $instance->addListener('hook_civicrm_triggerInfo', [0 => function () {
            return ${($_ = isset($this->services['civi.case.staticTriggers']) ? $this->services['civi.case.staticTriggers'] : $this->getCivi_Case_StaticTriggersService()) && false ?: '_'};
        }, 1 => 'onTriggerInfo'], 0);
        $instance->addListener('civi.token.eval', [0 => function () {
            return ${($_ = isset($this->services['civi_token_compat']) ? $this->services['civi_token_compat'] : ($this->services['civi_token_compat'] = new \Civi\Token\TokenCompatSubscriber())) && false ?: '_'};
        }, 1 => 'onEvaluate'], 0);
        $instance->addListener('civi.token.render', [0 => function () {
            return ${($_ = isset($this->services['civi_token_compat']) ? $this->services['civi_token_compat'] : ($this->services['civi_token_compat'] = new \Civi\Token\TokenCompatSubscriber())) && false ?: '_'};
        }, 1 => 'onRender'], 0);
        $instance->addListener('civi.token.list', [0 => function () {
            return ${($_ = isset($this->services['crm_mailing_action_tokens']) ? $this->services['crm_mailing_action_tokens'] : ($this->services['crm_mailing_action_tokens'] = new \CRM_Mailing_ActionTokens())) && false ?: '_'};
        }, 1 => 'registerTokens'], 0);
        $instance->addListener('civi.token.eval', [0 => function () {
            return ${($_ = isset($this->services['crm_mailing_action_tokens']) ? $this->services['crm_mailing_action_tokens'] : ($this->services['crm_mailing_action_tokens'] = new \CRM_Mailing_ActionTokens())) && false ?: '_'};
        }, 1 => 'evaluateTokens'], 0);
        $instance->addListener('civi.actionSchedule.prepareMailingQuery', [0 => function () {
            return ${($_ = isset($this->services['crm_mailing_action_tokens']) ? $this->services['crm_mailing_action_tokens'] : ($this->services['crm_mailing_action_tokens'] = new \CRM_Mailing_ActionTokens())) && false ?: '_'};
        }, 1 => 'alterActionScheduleQuery'], 0);
        $instance->addListener('civi.token.list', [0 => function () {
            return ${($_ = isset($this->services['crm_activity_tokens']) ? $this->services['crm_activity_tokens'] : ($this->services['crm_activity_tokens'] = new \CRM_Activity_Tokens())) && false ?: '_'};
        }, 1 => 'registerTokens'], 0);
        $instance->addListener('civi.token.eval', [0 => function () {
            return ${($_ = isset($this->services['crm_activity_tokens']) ? $this->services['crm_activity_tokens'] : ($this->services['crm_activity_tokens'] = new \CRM_Activity_Tokens())) && false ?: '_'};
        }, 1 => 'evaluateTokens'], 0);
        $instance->addListener('civi.actionSchedule.prepareMailingQuery', [0 => function () {
            return ${($_ = isset($this->services['crm_activity_tokens']) ? $this->services['crm_activity_tokens'] : ($this->services['crm_activity_tokens'] = new \CRM_Activity_Tokens())) && false ?: '_'};
        }, 1 => 'alterActionScheduleQuery'], 0);
        $instance->addListener('civi.token.list', [0 => function () {
            return ${($_ = isset($this->services['crm_contribute_tokens']) ? $this->services['crm_contribute_tokens'] : ($this->services['crm_contribute_tokens'] = new \CRM_Contribute_Tokens())) && false ?: '_'};
        }, 1 => 'registerTokens'], 0);
        $instance->addListener('civi.token.eval', [0 => function () {
            return ${($_ = isset($this->services['crm_contribute_tokens']) ? $this->services['crm_contribute_tokens'] : ($this->services['crm_contribute_tokens'] = new \CRM_Contribute_Tokens())) && false ?: '_'};
        }, 1 => 'evaluateTokens'], 0);
        $instance->addListener('civi.actionSchedule.prepareMailingQuery', [0 => function () {
            return ${($_ = isset($this->services['crm_contribute_tokens']) ? $this->services['crm_contribute_tokens'] : ($this->services['crm_contribute_tokens'] = new \CRM_Contribute_Tokens())) && false ?: '_'};
        }, 1 => 'alterActionScheduleQuery'], 0);
        $instance->addListener('civi.token.list', [0 => function () {
            return ${($_ = isset($this->services['crm_event_tokens']) ? $this->services['crm_event_tokens'] : ($this->services['crm_event_tokens'] = new \CRM_Event_Tokens())) && false ?: '_'};
        }, 1 => 'registerTokens'], 0);
        $instance->addListener('civi.token.eval', [0 => function () {
            return ${($_ = isset($this->services['crm_event_tokens']) ? $this->services['crm_event_tokens'] : ($this->services['crm_event_tokens'] = new \CRM_Event_Tokens())) && false ?: '_'};
        }, 1 => 'evaluateTokens'], 0);
        $instance->addListener('civi.actionSchedule.prepareMailingQuery', [0 => function () {
            return ${($_ = isset($this->services['crm_event_tokens']) ? $this->services['crm_event_tokens'] : ($this->services['crm_event_tokens'] = new \CRM_Event_Tokens())) && false ?: '_'};
        }, 1 => 'alterActionScheduleQuery'], 0);
        $instance->addListener('civi.token.list', [0 => function () {
            return ${($_ = isset($this->services['crm_mailing_tokens']) ? $this->services['crm_mailing_tokens'] : ($this->services['crm_mailing_tokens'] = new \CRM_Mailing_Tokens())) && false ?: '_'};
        }, 1 => 'registerTokens'], 0);
        $instance->addListener('civi.token.eval', [0 => function () {
            return ${($_ = isset($this->services['crm_mailing_tokens']) ? $this->services['crm_mailing_tokens'] : ($this->services['crm_mailing_tokens'] = new \CRM_Mailing_Tokens())) && false ?: '_'};
        }, 1 => 'evaluateTokens'], 0);
        $instance->addListener('civi.actionSchedule.prepareMailingQuery', [0 => function () {
            return ${($_ = isset($this->services['crm_mailing_tokens']) ? $this->services['crm_mailing_tokens'] : ($this->services['crm_mailing_tokens'] = new \CRM_Mailing_Tokens())) && false ?: '_'};
        }, 1 => 'alterActionScheduleQuery'], 0);
        $instance->addListener('civi.token.list', [0 => function () {
            return ${($_ = isset($this->services['crm_member_tokens']) ? $this->services['crm_member_tokens'] : ($this->services['crm_member_tokens'] = new \CRM_Member_Tokens())) && false ?: '_'};
        }, 1 => 'registerTokens'], 0);
        $instance->addListener('civi.token.eval', [0 => function () {
            return ${($_ = isset($this->services['crm_member_tokens']) ? $this->services['crm_member_tokens'] : ($this->services['crm_member_tokens'] = new \CRM_Member_Tokens())) && false ?: '_'};
        }, 1 => 'evaluateTokens'], 0);
        $instance->addListener('civi.actionSchedule.prepareMailingQuery', [0 => function () {
            return ${($_ = isset($this->services['crm_member_tokens']) ? $this->services['crm_member_tokens'] : ($this->services['crm_member_tokens'] = new \CRM_Member_Tokens())) && false ?: '_'};
        }, 1 => 'alterActionScheduleQuery'], 0);

        return $instance;
    }

    /**
     * Gets the private 'httpClient' shared service.
     *
     * @return \CRM_Utils_HttpClient
     */
    protected function getHttpClientService()
    {
        return $this->services['httpClient'] = \CRM_Utils_HttpClient::singleton();
    }

    /**
     * Gets the private 'i18n' shared service.
     *
     * @return \CRM_Core_I18n
     */
    protected function getI18nService()
    {
        return $this->services['i18n'] = \CRM_Core_I18n::singleton();
    }

    /**
     * Gets the private 'magic_function_provider' shared service.
     *
     * @return \Civi\API\Provider\MagicFunctionProvider
     */
    protected function getMagicFunctionProviderService()
    {
        return $this->services['magic_function_provider'] = new \Civi\API\Provider\MagicFunctionProvider();
    }

    /**
     * Gets the private 'pear_mail' shared service.
     *
     * @return \Mail
     */
    protected function getPearMailService()
    {
        return $this->services['pear_mail'] = \CRM_Utils_Mail::createMailer();
    }

    /**
     * Gets the private 'prevnext' shared service.
     *
     * @return \CRM_Core_PrevNextCache_Interface
     */
    protected function getPrevnextService()
    {
        return $this->services['prevnext'] = ${($_ = isset($this->services['civi_container_factory']) ? $this->services['civi_container_factory'] : ($this->services['civi_container_factory'] = new \Civi\Core\Container())) && false ?: '_'}->createPrevNextCache($this);
    }

    /**
     * Gets the private 'prevnext.driver.redis' shared service.
     *
     * @return \CRM_Core_PrevNextCache_Redis
     */
    protected function getPrevnext_Driver_RedisService()
    {
        return $this->services['prevnext.driver.redis'] = new \CRM_Core_PrevNextCache_Redis(${($_ = isset($this->services['cache_config']) ? $this->services['cache_config'] : $this->getCacheConfigService()) && false ?: '_'});
    }

    /**
     * Gets the private 'prevnext.driver.sql' shared service.
     *
     * @return \CRM_Core_PrevNextCache_Sql
     */
    protected function getPrevnext_Driver_SqlService()
    {
        return $this->services['prevnext.driver.sql'] = new \CRM_Core_PrevNextCache_Sql();
    }

    /**
     * Gets the private 'psr_log' shared service.
     *
     * @return \CRM_Core_Error_Log
     */
    protected function getPsrLogService()
    {
        return $this->services['psr_log'] = new \CRM_Core_Error_Log();
    }

    /**
     * Gets the private 'resources' shared service.
     *
     * @return \CRM_Core_Resources
     */
    protected function getResourcesService()
    {
        return $this->services['resources'] = ${($_ = isset($this->services['civi_container_factory']) ? $this->services['civi_container_factory'] : ($this->services['civi_container_factory'] = new \Civi\Core\Container())) && false ?: '_'}->createResources($this);
    }

    /**
     * Gets the private 'sql_triggers' shared service.
     *
     * @return \Civi\Core\SqlTriggers
     */
    protected function getSqlTriggersService()
    {
        return $this->services['sql_triggers'] = new \Civi\Core\SqlTriggers();
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [];
    private $dynamicParameters = [];

    /**
     * Computes a dynamic parameter.
     *
     * @param string $name The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
    }

    private $normalizedParameterNames = [];

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return [
            'civicrm_base_path' => '/app/vendor/civicrm/civicrm-core',
        ];
    }
}
