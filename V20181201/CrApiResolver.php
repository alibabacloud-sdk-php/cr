<?php

namespace AlibabaCloud\Cr\V20181201;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ListRepoSyncRule listRepoSyncRule(array $options = [])
 * @method CreateRepoSyncRule createRepoSyncRule(array $options = [])
 * @method DeleteRepoSyncRule deleteRepoSyncRule(array $options = [])
 * @method ListRepoSyncTask listRepoSyncTask(array $options = [])
 * @method GetRepoSyncTask getRepoSyncTask(array $options = [])
 * @method GetResourceQuota getResourceQuota(array $options = [])
 * @method CreateRepoTagScanTask createRepoTagScanTask(array $options = [])
 * @method CreateBuildRecordByRecord createBuildRecordByRecord(array $options = [])
 * @method UpdateInstanceEndpointAclStatus updateInstanceEndpointAclStatus(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method GetNamespace getNamespace(array $options = [])
 * @method ListNamespace listNamespace(array $options = [])
 * @method CreateNamespace createNamespace(array $options = [])
 * @method UpdateNamespace updateNamespace(array $options = [])
 * @method DeleteNamespace deleteNamespace(array $options = [])
 * @method ListRepository listRepository(array $options = [])
 * @method GetRepository getRepository(array $options = [])
 * @method CreateRepository createRepository(array $options = [])
 * @method DeleteRepository deleteRepository(array $options = [])
 * @method UpdateRepository updateRepository(array $options = [])
 * @method ListSourceCodeAccount listSourceCodeAccount(array $options = [])
 * @method CreateSourceCodeAccount createSourceCodeAccount(array $options = [])
 * @method ListSourceCodeRepo listSourceCodeRepo(array $options = [])
 * @method ListSourceCodeRepoRef listSourceCodeRepoRef(array $options = [])
 * @method ListRepoBuildRecord listRepoBuildRecord(array $options = [])
 * @method GetRepoBuildRecordStatus getRepoBuildRecordStatus(array $options = [])
 * @method ListRepoBuildRecordLog listRepoBuildRecordLog(array $options = [])
 * @method CancelRepoBuildRecord cancelRepoBuildRecord(array $options = [])
 * @method ListRepoBuildRule listRepoBuildRule(array $options = [])
 * @method DeleteRepoBuildRule deleteRepoBuildRule(array $options = [])
 * @method CreateRepoBuildRule createRepoBuildRule(array $options = [])
 * @method UpdateRepoBuildRule updateRepoBuildRule(array $options = [])
 * @method CreateBuildRecordByRule createBuildRecordByRule(array $options = [])
 * @method GetRepoSourceCodeRepo getRepoSourceCodeRepo(array $options = [])
 * @method CreateRepoSourceCodeRepo createRepoSourceCodeRepo(array $options = [])
 * @method ListRepoTag listRepoTag(array $options = [])
 * @method GetRepoTagLayers getRepoTagLayers(array $options = [])
 * @method GetRepoTagManifest getRepoTagManifest(array $options = [])
 * @method DeleteRepoTag deleteRepoTag(array $options = [])
 * @method GetRepoTagScanTask getRepoTagScanTask(array $options = [])
 * @method ListRepoTriggerLog listRepoTriggerLog(array $options = [])
 * @method GetAuthorizationToken getAuthorizationToken(array $options = [])
 * @method CreateRepoTrigger createRepoTrigger(array $options = [])
 * @method DeleteRepoTrigger deleteRepoTrigger(array $options = [])
 * @method ListRepoTrigger listRepoTrigger(array $options = [])
 * @method UpdateRepoTrigger updateRepoTrigger(array $options = [])
 * @method ResetLoginPassword resetLoginPassword(array $options = [])
 * @method GetInstance getInstance(array $options = [])
 * @method ListInstance listInstance(array $options = [])
 * @method GetInstanceStorageUsage getInstanceStorageUsage(array $options = [])
 * @method GetInstanceStorageInternetIn getInstanceStorageInternetIn(array $options = [])
 * @method GetInstanceStorageInternetOut getInstanceStorageInternetOut(array $options = [])
 * @method GetInstanceStorageIntranetIn getInstanceStorageIntranetIn(array $options = [])
 * @method GetInstanceStorageIntranetOut getInstanceStorageIntranetOut(array $options = [])
 * @method ListInstanceRegion listInstanceRegion(array $options = [])
 * @method GetInstanceUsage getInstanceUsage(array $options = [])
 * @method GetInstanceStorage getInstanceStorage(array $options = [])
 * @method ListInstanceEndpoint listInstanceEndpoint(array $options = [])
 * @method ListUserVpc listUserVpc(array $options = [])
 * @method GetInstanceVpcEndpoint getInstanceVpcEndpoint(array $options = [])
 * @method CreateInstanceVpcEndpointLinkedVpc createInstanceVpcEndpointLinkedVpc(array $options = [])
 * @method DeleteInstanceVpcEndpointLinkedVpc deleteInstanceVpcEndpointLinkedVpc(array $options = [])
 * @method UpdateInstanceEndpointStatus updateInstanceEndpointStatus(array $options = [])
 * @method GetInstanceEndpoint getInstanceEndpoint(array $options = [])
 * @method CreateInstanceEndpointAclPolicy createInstanceEndpointAclPolicy(array $options = [])
 * @method DeleteInstanceEndpointAclPolicy deleteInstanceEndpointAclPolicy(array $options = [])
 * @method GetInstanceCount getInstanceCount(array $options = [])
 */
class CrApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'cr';

    /** @var string */
    public $version = '2018-12-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'cr';
}

/**
 * @method string getNamespaceName()
 * @method $this withNamespaceName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTargetInstanceId()
 * @method $this withTargetInstanceId($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTargetRegionId()
 * @method $this withTargetRegionId($value)
 */
class ListRepoSyncRule extends Rpc
{
}

/**
 * @method string getNamespaceName()
 * @method $this withNamespaceName($value)
 * @method string getTargetNamespaceName()
 * @method $this withTargetNamespaceName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTargetInstanceId()
 * @method $this withTargetInstanceId($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getTargetRepoName()
 * @method $this withTargetRepoName($value)
 * @method string getSyncScope()
 * @method $this withSyncScope($value)
 * @method string getTargetRegionId()
 * @method $this withTargetRegionId($value)
 * @method string getSyncRuleName()
 * @method $this withSyncRuleName($value)
 * @method string getTagFilter()
 * @method $this withTagFilter($value)
 */
class CreateRepoSyncRule extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSyncRuleId()
 * @method $this withSyncRuleId($value)
 */
class DeleteRepoSyncRule extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListRepoSyncTask extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSyncTaskId()
 * @method $this withSyncTaskId($value)
 */
class GetRepoSyncTask extends Rpc
{
}

/**
 * @method string getScopeId()
 * @method $this withScopeId($value)
 * @method string getResourceName()
 * @method $this withResourceName($value)
 */
class GetResourceQuota extends Rpc
{
}

/**
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTag()
 * @method $this withTag($value)
 */
class CreateRepoTagScanTask extends Rpc
{
}

/**
 * @method string getBuildRecordId()
 * @method $this withBuildRecordId($value)
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CreateBuildRecordByRecord extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEndpointType()
 * @method $this withEndpointType($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 */
class UpdateInstanceEndpointAclStatus extends Rpc
{
}

/**
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getInstanceSpecification()
 * @method $this withInstanceSpecification($value)
 */
class CreateInstance extends Rpc
{
}

/**
 * @method string getNamespaceName()
 * @method $this withNamespaceName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetNamespace extends Rpc
{
}

/**
 * @method string getNamespaceName()
 * @method $this withNamespaceName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNamespaceStatus()
 * @method $this withNamespaceStatus($value)
 */
class ListNamespace extends Rpc
{
}

/**
 * @method string getNamespaceName()
 * @method $this withNamespaceName($value)
 * @method string getAutoCreateRepo()
 * @method $this withAutoCreateRepo($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDefaultRepoType()
 * @method $this withDefaultRepoType($value)
 */
class CreateNamespace extends Rpc
{
}

/**
 * @method string getNamespaceName()
 * @method $this withNamespaceName($value)
 * @method string getAutoCreateRepo()
 * @method $this withAutoCreateRepo($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDefaultRepoType()
 * @method $this withDefaultRepoType($value)
 */
class UpdateNamespace extends Rpc
{
}

/**
 * @method string getNamespaceName()
 * @method $this withNamespaceName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteNamespace extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getRepoNamespaceName()
 * @method $this withRepoNamespaceName($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRepoStatus()
 * @method $this withRepoStatus($value)
 */
class ListRepository extends Rpc
{
}

/**
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRepoNamespaceName()
 * @method $this withRepoNamespaceName($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class GetRepository extends Rpc
{
}

/**
 * @method string getRepoType()
 * @method $this withRepoType($value)
 * @method string getSummary()
 * @method $this withSummary($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getRepoNamespaceName()
 * @method $this withRepoNamespaceName($value)
 * @method string getDetail()
 * @method $this withDetail($value)
 */
class CreateRepository extends Rpc
{
}

/**
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteRepository extends Rpc
{
}

/**
 * @method string getRepoType()
 * @method $this withRepoType($value)
 * @method string getSummary()
 * @method $this withSummary($value)
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDetail()
 * @method $this withDetail($value)
 */
class UpdateRepository extends Rpc
{
}

/**
 * @method string getCodeRepoType()
 * @method $this withCodeRepoType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListSourceCodeAccount extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getCodeRepoType()
 * @method $this withCodeRepoType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCodeRepoUrl()
 * @method $this withCodeRepoUrl($value)
 * @method string getAccessToken()
 * @method $this withAccessToken($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class CreateSourceCodeAccount extends Rpc
{
}

/**
 * @method string getCodeRepoType()
 * @method $this withCodeRepoType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListSourceCodeRepo extends Rpc
{
}

/**
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListSourceCodeRepoRef extends Rpc
{
}

/**
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListRepoBuildRecord extends Rpc
{
}

/**
 * @method string getBuildRecordId()
 * @method $this withBuildRecordId($value)
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetRepoBuildRecordStatus extends Rpc
{
}

/**
 * @method string getBuildRecordId()
 * @method $this withBuildRecordId($value)
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 */
class ListRepoBuildRecordLog extends Rpc
{
}

/**
 * @method string getBuildRecordId()
 * @method $this withBuildRecordId($value)
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CancelRepoBuildRecord extends Rpc
{
}

/**
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListRepoBuildRule extends Rpc
{
}

/**
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getBuildRuleId()
 * @method $this withBuildRuleId($value)
 */
class DeleteRepoBuildRule extends Rpc
{
}

/**
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getPushName()
 * @method $this withPushName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDockerfileName()
 * @method $this withDockerfileName($value)
 * @method string getDockerfileLocation()
 * @method $this withDockerfileLocation($value)
 * @method string getImageTag()
 * @method $this withImageTag($value)
 * @method string getPushType()
 * @method $this withPushType($value)
 */
class CreateRepoBuildRule extends Rpc
{
}

/**
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getPushName()
 * @method $this withPushName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDockerfileName()
 * @method $this withDockerfileName($value)
 * @method string getDockerfileLocation()
 * @method $this withDockerfileLocation($value)
 * @method string getImageTag()
 * @method $this withImageTag($value)
 * @method string getBuildRuleId()
 * @method $this withBuildRuleId($value)
 * @method string getPushType()
 * @method $this withPushType($value)
 */
class UpdateRepoBuildRule extends Rpc
{
}

/**
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getBuildRuleId()
 * @method $this withBuildRuleId($value)
 */
class CreateBuildRecordByRule extends Rpc
{
}

/**
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetRepoSourceCodeRepo extends Rpc
{
}

/**
 * @method string getCodeRepoType()
 * @method $this withCodeRepoType($value)
 * @method string getDisableCacheBuild()
 * @method $this withDisableCacheBuild($value)
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getOverseaBuild()
 * @method $this withOverseaBuild($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCodeRepoNamespaceName()
 * @method $this withCodeRepoNamespaceName($value)
 * @method string getCodeRepoName()
 * @method $this withCodeRepoName($value)
 * @method string getAutoBuild()
 * @method $this withAutoBuild($value)
 */
class CreateRepoSourceCodeRepo extends Rpc
{
}

/**
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListRepoTag extends Rpc
{
}

/**
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTag()
 * @method $this withTag($value)
 */
class GetRepoTagLayers extends Rpc
{
}

/**
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getSchemaVersion()
 * @method $this withSchemaVersion($value)
 */
class GetRepoTagManifest extends Rpc
{
}

/**
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTag()
 * @method $this withTag($value)
 */
class DeleteRepoTag extends Rpc
{
}

/**
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTag()
 * @method $this withTag($value)
 */
class GetRepoTagScanTask extends Rpc
{
}

/**
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTriggerId()
 * @method $this withTriggerId($value)
 */
class ListRepoTriggerLog extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetAuthorizationToken extends Rpc
{
}

/**
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getTriggerUrl()
 * @method $this withTriggerUrl($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTriggerName()
 * @method $this withTriggerName($value)
 * @method string getTriggerTag()
 * @method $this withTriggerTag($value)
 * @method string getTriggerType()
 * @method $this withTriggerType($value)
 */
class CreateRepoTrigger extends Rpc
{
}

/**
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTriggerId()
 * @method $this withTriggerId($value)
 */
class DeleteRepoTrigger extends Rpc
{
}

/**
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListRepoTrigger extends Rpc
{
}

/**
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getTriggerUrl()
 * @method $this withTriggerUrl($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTriggerName()
 * @method $this withTriggerName($value)
 * @method string getTriggerTag()
 * @method $this withTriggerTag($value)
 * @method string getTriggerId()
 * @method $this withTriggerId($value)
 * @method string getTriggerType()
 * @method $this withTriggerType($value)
 */
class UpdateRepoTrigger extends Rpc
{
}

/**
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ResetLoginPassword extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetInstance extends Rpc
{
}

/**
 * @method string getInstanceStatus()
 * @method $this withInstanceStatus($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListInstance extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class GetInstanceStorageUsage extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class GetInstanceStorageInternetIn extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class GetInstanceStorageInternetOut extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class GetInstanceStorageIntranetIn extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class GetInstanceStorageIntranetOut extends Rpc
{
}

/**
 * @method string getLang()
 * @method $this withLang($value)
 */
class ListInstanceRegion extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetInstanceUsage extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetInstanceStorage extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListInstanceEndpoint extends Rpc
{
}

/**
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListUserVpc extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetInstanceVpcEndpoint extends Rpc
{
}

/**
 * @method string getVswitchId()
 * @method $this withVswitchId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class CreateInstanceVpcEndpointLinkedVpc extends Rpc
{
}

/**
 * @method string getVswitchId()
 * @method $this withVswitchId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class DeleteInstanceVpcEndpointLinkedVpc extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEndpointType()
 * @method $this withEndpointType($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 */
class UpdateInstanceEndpointStatus extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEndpointType()
 * @method $this withEndpointType($value)
 */
class GetInstanceEndpoint extends Rpc
{
}

/**
 * @method string getEntry()
 * @method $this withEntry($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEndpointType()
 * @method $this withEndpointType($value)
 * @method string getComment()
 * @method $this withComment($value)
 */
class CreateInstanceEndpointAclPolicy extends Rpc
{
}

/**
 * @method string getEntry()
 * @method $this withEntry($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEndpointType()
 * @method $this withEndpointType($value)
 */
class DeleteInstanceEndpointAclPolicy extends Rpc
{
}

class GetInstanceCount extends Rpc
{
}
