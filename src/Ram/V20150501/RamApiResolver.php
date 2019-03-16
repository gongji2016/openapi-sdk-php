<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\ApiResolverTrait;

/**
 * Resolve Api based on the method name.
 *
 * @method GetAccessKeyLastUsed getAccessKeyLastUsed(array $options = [])
 * @method GetPublicKey getPublicKey(array $options = [])
 * @method UpdatePublicKey updatePublicKey(array $options = [])
 * @method UploadPublicKey uploadPublicKey(array $options = [])
 * @method ListPublicKeys listPublicKeys(array $options = [])
 * @method DeletePublicKey deletePublicKey(array $options = [])
 * @method ChangePassword changePassword(array $options = [])
 * @method CreateGroup createGroup(array $options = [])
 * @method GetGroup getGroup(array $options = [])
 * @method DeleteGroup deleteGroup(array $options = [])
 * @method AddUserToGroup addUserToGroup(array $options = [])
 * @method UpdateGroup updateGroup(array $options = [])
 * @method ListGroups listGroups(array $options = [])
 * @method ListUsersForGroup listUsersForGroup(array $options = [])
 * @method ListGroupsForUser listGroupsForUser(array $options = [])
 * @method CreatePolicy createPolicy(array $options = [])
 * @method RemoveUserFromGroup removeUserFromGroup(array $options = [])
 * @method AttachPolicyToGroup attachPolicyToGroup(array $options = [])
 * @method ListPolicies listPolicies(array $options = [])
 * @method GetPolicy getPolicy(array $options = [])
 * @method DeletePolicy deletePolicy(array $options = [])
 * @method ListEntitiesForPolicy listEntitiesForPolicy(array $options = [])
 * @method DetachPolicyFromUser detachPolicyFromUser(array $options = [])
 * @method DetachPolicyFromGroup detachPolicyFromGroup(array $options = [])
 * @method AttachPolicyToUser attachPolicyToUser(array $options = [])
 * @method CreatePolicyVersion createPolicyVersion(array $options = [])
 * @method ListPoliciesForUser listPoliciesForUser(array $options = [])
 * @method ListPoliciesForGroup listPoliciesForGroup(array $options = [])
 * @method SetDefaultPolicyVersion setDefaultPolicyVersion(array $options = [])
 * @method ListPolicyVersions listPolicyVersions(array $options = [])
 * @method GetPolicyVersion getPolicyVersion(array $options = [])
 * @method DeletePolicyVersion deletePolicyVersion(array $options = [])
 * @method SetAccountAlias setAccountAlias(array $options = [])
 * @method GetPasswordPolicy getPasswordPolicy(array $options = [])
 * @method GetAccountAlias getAccountAlias(array $options = [])
 * @method ClearAccountAlias clearAccountAlias(array $options = [])
 * @method SetPasswordPolicy setPasswordPolicy(array $options = [])
 * @method CreateUser createUser(array $options = [])
 * @method UpdateAccessKey updateAccessKey(array $options = [])
 * @method ListAccessKeys listAccessKeys(array $options = [])
 * @method DeleteAccessKey deleteAccessKey(array $options = [])
 * @method CreateAccessKey createAccessKey(array $options = [])
 * @method ListUsers listUsers(array $options = [])
 * @method GetUser getUser(array $options = [])
 * @method DeleteUser deleteUser(array $options = [])
 * @method GetLoginProfile getLoginProfile(array $options = [])
 * @method DeleteLoginProfile deleteLoginProfile(array $options = [])
 * @method CreateLoginProfile createLoginProfile(array $options = [])
 * @method UpdateUser updateUser(array $options = [])
 * @method DeleteVirtualMFADevice deleteVirtualMFADevice(array $options = [])
 * @method CreateVirtualMFADevice createVirtualMFADevice(array $options = [])
 * @method BindMFADevice bindMFADevice(array $options = [])
 * @method UpdateLoginProfile updateLoginProfile(array $options = [])
 * @method AttachPolicyToRole attachPolicyToRole(array $options = [])
 * @method UnbindMFADevice unbindMFADevice(array $options = [])
 * @method ListVirtualMFADevices listVirtualMFADevices(array $options = [])
 * @method GetUserMFAInfo getUserMFAInfo(array $options = [])
 * @method DetachPolicyFromRole detachPolicyFromRole(array $options = [])
 * @method DeleteRole deleteRole(array $options = [])
 * @method CreateRole createRole(array $options = [])
 * @method ListRoles listRoles(array $options = [])
 * @method ListPoliciesForRole listPoliciesForRole(array $options = [])
 * @method GetSecurityPreference getSecurityPreference(array $options = [])
 * @method GetRole getRole(array $options = [])
 * @method UpdateRole updateRole(array $options = [])
 * @method SetSecurityPreference setSecurityPreference(array $options = [])
 */
class RamApiResolver
{
    use ApiResolverTrait;
}
