<?php

namespace WP_Cloud_Search;

// This file was auto-generated from sdk-root/src/data/amplifyuibuilder/2021-08-11/api-2.json
return ['version' => '2.0', 'metadata' => ['apiVersion' => '2021-08-11', 'endpointPrefix' => 'amplifyuibuilder', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'AWS Amplify UI Builder', 'serviceId' => 'AmplifyUIBuilder', 'signatureVersion' => 'v4', 'signingName' => 'amplifyuibuilder', 'uid' => 'amplifyuibuilder-2021-08-11'], 'operations' => ['CreateComponent' => ['name' => 'CreateComponent', 'http' => ['method' => 'POST', 'requestUri' => '/app/{appId}/environment/{environmentName}/components', 'responseCode' => 200], 'input' => ['shape' => 'CreateComponentRequest'], 'output' => ['shape' => 'CreateComponentResponse'], 'errors' => [['shape' => 'ServiceQuotaExceededException'], ['shape' => 'ResourceConflictException'], ['shape' => 'InternalServerException'], ['shape' => 'InvalidParameterException']], 'idempotent' => \true], 'CreateTheme' => ['name' => 'CreateTheme', 'http' => ['method' => 'POST', 'requestUri' => '/app/{appId}/environment/{environmentName}/themes', 'responseCode' => 200], 'input' => ['shape' => 'CreateThemeRequest'], 'output' => ['shape' => 'CreateThemeResponse'], 'errors' => [['shape' => 'ServiceQuotaExceededException'], ['shape' => 'ResourceConflictException'], ['shape' => 'InternalServerException'], ['shape' => 'InvalidParameterException']], 'idempotent' => \true], 'DeleteComponent' => ['name' => 'DeleteComponent', 'http' => ['method' => 'DELETE', 'requestUri' => '/app/{appId}/environment/{environmentName}/components/{id}', 'responseCode' => 200], 'input' => ['shape' => 'DeleteComponentRequest'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'InvalidParameterException'], ['shape' => 'ResourceNotFoundException']], 'idempotent' => \true], 'DeleteTheme' => ['name' => 'DeleteTheme', 'http' => ['method' => 'DELETE', 'requestUri' => '/app/{appId}/environment/{environmentName}/themes/{id}', 'responseCode' => 200], 'input' => ['shape' => 'DeleteThemeRequest'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'InvalidParameterException'], ['shape' => 'ResourceNotFoundException']], 'idempotent' => \true], 'ExchangeCodeForToken' => ['name' => 'ExchangeCodeForToken', 'http' => ['method' => 'POST', 'requestUri' => '/tokens/{provider}', 'responseCode' => 200], 'input' => ['shape' => 'ExchangeCodeForTokenRequest'], 'output' => ['shape' => 'ExchangeCodeForTokenResponse'], 'errors' => [['shape' => 'InvalidParameterException']]], 'ExportComponents' => ['name' => 'ExportComponents', 'http' => ['method' => 'GET', 'requestUri' => '/export/app/{appId}/environment/{environmentName}/components', 'responseCode' => 200], 'input' => ['shape' => 'ExportComponentsRequest'], 'output' => ['shape' => 'ExportComponentsResponse'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'InvalidParameterException']]], 'ExportThemes' => ['name' => 'ExportThemes', 'http' => ['method' => 'GET', 'requestUri' => '/export/app/{appId}/environment/{environmentName}/themes', 'responseCode' => 200], 'input' => ['shape' => 'ExportThemesRequest'], 'output' => ['shape' => 'ExportThemesResponse'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'InvalidParameterException']]], 'GetComponent' => ['name' => 'GetComponent', 'http' => ['method' => 'GET', 'requestUri' => '/app/{appId}/environment/{environmentName}/components/{id}', 'responseCode' => 200], 'input' => ['shape' => 'GetComponentRequest'], 'output' => ['shape' => 'GetComponentResponse'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'InvalidParameterException'], ['shape' => 'ResourceNotFoundException']]], 'GetTheme' => ['name' => 'GetTheme', 'http' => ['method' => 'GET', 'requestUri' => '/app/{appId}/environment/{environmentName}/themes/{id}', 'responseCode' => 200], 'input' => ['shape' => 'GetThemeRequest'], 'output' => ['shape' => 'GetThemeResponse'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'InvalidParameterException'], ['shape' => 'ResourceNotFoundException']]], 'ListComponents' => ['name' => 'ListComponents', 'http' => ['method' => 'GET', 'requestUri' => '/app/{appId}/environment/{environmentName}/components', 'responseCode' => 200], 'input' => ['shape' => 'ListComponentsRequest'], 'output' => ['shape' => 'ListComponentsResponse'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'InvalidParameterException']]], 'ListThemes' => ['name' => 'ListThemes', 'http' => ['method' => 'GET', 'requestUri' => '/app/{appId}/environment/{environmentName}/themes', 'responseCode' => 200], 'input' => ['shape' => 'ListThemesRequest'], 'output' => ['shape' => 'ListThemesResponse'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'InvalidParameterException']]], 'RefreshToken' => ['name' => 'RefreshToken', 'http' => ['method' => 'POST', 'requestUri' => '/tokens/{provider}/refresh', 'responseCode' => 200], 'input' => ['shape' => 'RefreshTokenRequest'], 'output' => ['shape' => 'RefreshTokenResponse'], 'errors' => [['shape' => 'InvalidParameterException']]], 'UpdateComponent' => ['name' => 'UpdateComponent', 'http' => ['method' => 'PATCH', 'requestUri' => '/app/{appId}/environment/{environmentName}/components/{id}', 'responseCode' => 200], 'input' => ['shape' => 'UpdateComponentRequest'], 'output' => ['shape' => 'UpdateComponentResponse'], 'errors' => [['shape' => 'ResourceConflictException'], ['shape' => 'InternalServerException'], ['shape' => 'InvalidParameterException']], 'idempotent' => \true], 'UpdateTheme' => ['name' => 'UpdateTheme', 'http' => ['method' => 'PATCH', 'requestUri' => '/app/{appId}/environment/{environmentName}/themes/{id}', 'responseCode' => 200], 'input' => ['shape' => 'UpdateThemeRequest'], 'output' => ['shape' => 'UpdateThemeResponse'], 'errors' => [['shape' => 'ResourceConflictException'], ['shape' => 'InternalServerException'], ['shape' => 'InvalidParameterException']], 'idempotent' => \true]], 'shapes' => ['ActionParameters' => ['type' => 'structure', 'members' => ['anchor' => ['shape' => 'ComponentProperty'], 'fields' => ['shape' => 'ComponentProperties'], 'global' => ['shape' => 'ComponentProperty'], 'id' => ['shape' => 'ComponentProperty'], 'model' => ['shape' => 'String'], 'state' => ['shape' => 'MutationActionSetStateParameter'], 'target' => ['shape' => 'ComponentProperty'], 'type' => ['shape' => 'ComponentProperty'], 'url' => ['shape' => 'ComponentProperty']]], 'Boolean' => ['type' => 'boolean', 'box' => \true], 'Component' => ['type' => 'structure', 'required' => ['appId', 'bindingProperties', 'componentType', 'createdAt', 'environmentName', 'id', 'name', 'overrides', 'properties', 'variants'], 'members' => ['appId' => ['shape' => 'String'], 'bindingProperties' => ['shape' => 'ComponentBindingProperties'], 'children' => ['shape' => 'ComponentChildList'], 'collectionProperties' => ['shape' => 'ComponentCollectionProperties'], 'componentType' => ['shape' => 'ComponentType'], 'createdAt' => ['shape' => 'SyntheticTimestamp_date_time'], 'environmentName' => ['shape' => 'String'], 'events' => ['shape' => 'ComponentEvents'], 'id' => ['shape' => 'Uuid'], 'modifiedAt' => ['shape' => 'SyntheticTimestamp_date_time'], 'name' => ['shape' => 'ComponentName'], 'overrides' => ['shape' => 'ComponentOverrides'], 'properties' => ['shape' => 'ComponentProperties'], 'schemaVersion' => ['shape' => 'String'], 'sourceId' => ['shape' => 'String'], 'tags' => ['shape' => 'Tags'], 'variants' => ['shape' => 'ComponentVariants']]], 'ComponentBindingProperties' => ['type' => 'map', 'key' => ['shape' => 'String'], 'value' => ['shape' => 'ComponentBindingPropertiesValue']], 'ComponentBindingPropertiesValue' => ['type' => 'structure', 'members' => ['bindingProperties' => ['shape' => 'ComponentBindingPropertiesValueProperties'], 'defaultValue' => ['shape' => 'String'], 'type' => ['shape' => 'String']]], 'ComponentBindingPropertiesValueProperties' => ['type' => 'structure', 'members' => ['bucket' => ['shape' => 'String'], 'defaultValue' => ['shape' => 'String'], 'field' => ['shape' => 'String'], 'key' => ['shape' => 'String'], 'model' => ['shape' => 'String'], 'predicates' => ['shape' => 'PredicateList'], 'userAttribute' => ['shape' => 'String']]], 'ComponentChild' => ['type' => 'structure', 'required' => ['componentType', 'name', 'properties'], 'members' => ['children' => ['shape' => 'ComponentChildList'], 'componentType' => ['shape' => 'String'], 'events' => ['shape' => 'ComponentEvents'], 'name' => ['shape' => 'String'], 'properties' => ['shape' => 'ComponentProperties'], 'sourceId' => ['shape' => 'String']]], 'ComponentChildList' => ['type' => 'list', 'member' => ['shape' => 'ComponentChild']], 'ComponentCollectionProperties' => ['type' => 'map', 'key' => ['shape' => 'String'], 'value' => ['shape' => 'ComponentDataConfiguration']], 'ComponentConditionProperty' => ['type' => 'structure', 'members' => ['else' => ['shape' => 'ComponentProperty'], 'field' => ['shape' => 'String'], 'operand' => ['shape' => 'String'], 'operandType' => ['shape' => 'String'], 'operator' => ['shape' => 'String'], 'property' => ['shape' => 'String'], 'then' => ['shape' => 'ComponentProperty']]], 'ComponentDataConfiguration' => ['type' => 'structure', 'required' => ['model'], 'members' => ['identifiers' => ['shape' => 'IdentifierList'], 'model' => ['shape' => 'String'], 'predicate' => ['shape' => 'Predicate'], 'sort' => ['shape' => 'SortPropertyList']]], 'ComponentEvent' => ['type' => 'structure', 'members' => ['action' => ['shape' => 'String'], 'bindingEvent' => ['shape' => 'String'], 'parameters' => ['shape' => 'ActionParameters']]], 'ComponentEvents' => ['type' => 'map', 'key' => ['shape' => 'String'], 'value' => ['shape' => 'ComponentEvent']], 'ComponentList' => ['type' => 'list', 'member' => ['shape' => 'Component']], 'ComponentName' => ['type' => 'string', 'max' => 255, 'min' => 1], 'ComponentOverrides' => ['type' => 'map', 'key' => ['shape' => 'String'], 'value' => ['shape' => 'ComponentOverridesValue']], 'ComponentOverridesValue' => ['type' => 'map', 'key' => ['shape' => 'String'], 'value' => ['shape' => 'String']], 'ComponentProperties' => ['type' => 'map', 'key' => ['shape' => 'String'], 'value' => ['shape' => 'ComponentProperty']], 'ComponentProperty' => ['type' => 'structure', 'members' => ['bindingProperties' => ['shape' => 'ComponentPropertyBindingProperties'], 'bindings' => ['shape' => 'FormBindings'], 'collectionBindingProperties' => ['shape' => 'ComponentPropertyBindingProperties'], 'componentName' => ['shape' => 'String'], 'concat' => ['shape' => 'ComponentPropertyList'], 'condition' => ['shape' => 'ComponentConditionProperty'], 'configured' => ['shape' => 'Boolean'], 'defaultValue' => ['shape' => 'String'], 'event' => ['shape' => 'String'], 'importedValue' => ['shape' => 'String'], 'model' => ['shape' => 'String'], 'property' => ['shape' => 'String'], 'type' => ['shape' => 'String'], 'userAttribute' => ['shape' => 'String'], 'value' => ['shape' => 'String']]], 'ComponentPropertyBindingProperties' => ['type' => 'structure', 'required' => ['property'], 'members' => ['field' => ['shape' => 'String'], 'property' => ['shape' => 'String']]], 'ComponentPropertyList' => ['type' => 'list', 'member' => ['shape' => 'ComponentProperty']], 'ComponentSummary' => ['type' => 'structure', 'required' => ['appId', 'componentType', 'environmentName', 'id', 'name'], 'members' => ['appId' => ['shape' => 'String'], 'componentType' => ['shape' => 'ComponentType'], 'environmentName' => ['shape' => 'String'], 'id' => ['shape' => 'Uuid'], 'name' => ['shape' => 'ComponentName']]], 'ComponentSummaryList' => ['type' => 'list', 'member' => ['shape' => 'ComponentSummary']], 'ComponentType' => ['type' => 'string', 'max' => 255, 'min' => 1], 'ComponentVariant' => ['type' => 'structure', 'members' => ['overrides' => ['shape' => 'ComponentOverrides'], 'variantValues' => ['shape' => 'ComponentVariantValues']]], 'ComponentVariantValues' => ['type' => 'map', 'key' => ['shape' => 'String'], 'value' => ['shape' => 'String']], 'ComponentVariants' => ['type' => 'list', 'member' => ['shape' => 'ComponentVariant']], 'CreateComponentData' => ['type' => 'structure', 'required' => ['bindingProperties', 'componentType', 'name', 'overrides', 'properties', 'variants'], 'members' => ['bindingProperties' => ['shape' => 'ComponentBindingProperties'], 'children' => ['shape' => 'ComponentChildList'], 'collectionProperties' => ['shape' => 'ComponentCollectionProperties'], 'componentType' => ['shape' => 'ComponentType'], 'events' => ['shape' => 'ComponentEvents'], 'name' => ['shape' => 'ComponentName'], 'overrides' => ['shape' => 'ComponentOverrides'], 'properties' => ['shape' => 'ComponentProperties'], 'schemaVersion' => ['shape' => 'String'], 'sourceId' => ['shape' => 'String'], 'tags' => ['shape' => 'Tags'], 'variants' => ['shape' => 'ComponentVariants']]], 'CreateComponentRequest' => ['type' => 'structure', 'required' => ['appId', 'componentToCreate', 'environmentName'], 'members' => ['appId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'appId'], 'clientToken' => ['shape' => 'String', 'idempotencyToken' => \true, 'location' => 'querystring', 'locationName' => 'clientToken'], 'componentToCreate' => ['shape' => 'CreateComponentData'], 'environmentName' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'environmentName']], 'payload' => 'componentToCreate'], 'CreateComponentResponse' => ['type' => 'structure', 'members' => ['entity' => ['shape' => 'Component']], 'payload' => 'entity'], 'CreateThemeData' => ['type' => 'structure', 'required' => ['name', 'values'], 'members' => ['name' => ['shape' => 'ThemeName'], 'overrides' => ['shape' => 'ThemeValuesList'], 'tags' => ['shape' => 'Tags'], 'values' => ['shape' => 'ThemeValuesList']]], 'CreateThemeRequest' => ['type' => 'structure', 'required' => ['appId', 'environmentName', 'themeToCreate'], 'members' => ['appId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'appId'], 'clientToken' => ['shape' => 'String', 'idempotencyToken' => \true, 'location' => 'querystring', 'locationName' => 'clientToken'], 'environmentName' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'environmentName'], 'themeToCreate' => ['shape' => 'CreateThemeData']], 'payload' => 'themeToCreate'], 'CreateThemeResponse' => ['type' => 'structure', 'members' => ['entity' => ['shape' => 'Theme']], 'payload' => 'entity'], 'DeleteComponentRequest' => ['type' => 'structure', 'required' => ['appId', 'environmentName', 'id'], 'members' => ['appId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'appId'], 'environmentName' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'environmentName'], 'id' => ['shape' => 'Uuid', 'location' => 'uri', 'locationName' => 'id']]], 'DeleteThemeRequest' => ['type' => 'structure', 'required' => ['appId', 'environmentName', 'id'], 'members' => ['appId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'appId'], 'environmentName' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'environmentName'], 'id' => ['shape' => 'Uuid', 'location' => 'uri', 'locationName' => 'id']]], 'ExchangeCodeForTokenRequest' => ['type' => 'structure', 'required' => ['provider', 'request'], 'members' => ['provider' => ['shape' => 'TokenProviders', 'location' => 'uri', 'locationName' => 'provider'], 'request' => ['shape' => 'ExchangeCodeForTokenRequestBody']], 'payload' => 'request'], 'ExchangeCodeForTokenRequestBody' => ['type' => 'structure', 'required' => ['code', 'redirectUri'], 'members' => ['code' => ['shape' => 'SensitiveString'], 'redirectUri' => ['shape' => 'String']]], 'ExchangeCodeForTokenResponse' => ['type' => 'structure', 'required' => ['accessToken', 'expiresIn', 'refreshToken'], 'members' => ['accessToken' => ['shape' => 'SensitiveString'], 'expiresIn' => ['shape' => 'Integer'], 'refreshToken' => ['shape' => 'SensitiveString']]], 'ExportComponentsRequest' => ['type' => 'structure', 'required' => ['appId', 'environmentName'], 'members' => ['appId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'appId'], 'environmentName' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'environmentName'], 'nextToken' => ['shape' => 'String', 'location' => 'querystring', 'locationName' => 'nextToken']]], 'ExportComponentsResponse' => ['type' => 'structure', 'required' => ['entities'], 'members' => ['entities' => ['shape' => 'ComponentList'], 'nextToken' => ['shape' => 'String']]], 'ExportThemesRequest' => ['type' => 'structure', 'required' => ['appId', 'environmentName'], 'members' => ['appId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'appId'], 'environmentName' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'environmentName'], 'nextToken' => ['shape' => 'String', 'location' => 'querystring', 'locationName' => 'nextToken']]], 'ExportThemesResponse' => ['type' => 'structure', 'required' => ['entities'], 'members' => ['entities' => ['shape' => 'ThemeList'], 'nextToken' => ['shape' => 'String']]], 'FormBindingElement' => ['type' => 'structure', 'required' => ['element', 'property'], 'members' => ['element' => ['shape' => 'String'], 'property' => ['shape' => 'String']]], 'FormBindings' => ['type' => 'map', 'key' => ['shape' => 'String'], 'value' => ['shape' => 'FormBindingElement']], 'GetComponentRequest' => ['type' => 'structure', 'required' => ['appId', 'environmentName', 'id'], 'members' => ['appId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'appId'], 'environmentName' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'environmentName'], 'id' => ['shape' => 'Uuid', 'location' => 'uri', 'locationName' => 'id']]], 'GetComponentResponse' => ['type' => 'structure', 'members' => ['component' => ['shape' => 'Component']], 'payload' => 'component'], 'GetThemeRequest' => ['type' => 'structure', 'required' => ['appId', 'environmentName', 'id'], 'members' => ['appId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'appId'], 'environmentName' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'environmentName'], 'id' => ['shape' => 'Uuid', 'location' => 'uri', 'locationName' => 'id']]], 'GetThemeResponse' => ['type' => 'structure', 'members' => ['theme' => ['shape' => 'Theme']], 'payload' => 'theme'], 'IdentifierList' => ['type' => 'list', 'member' => ['shape' => 'String']], 'Integer' => ['type' => 'integer', 'box' => \true], 'InternalServerException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 500], 'exception' => \true, 'fault' => \true], 'InvalidParameterException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400, 'senderFault' => \true], 'exception' => \true], 'ListComponentsLimit' => ['type' => 'integer', 'max' => 100, 'min' => 1], 'ListComponentsRequest' => ['type' => 'structure', 'required' => ['appId', 'environmentName'], 'members' => ['appId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'appId'], 'environmentName' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'environmentName'], 'maxResults' => ['shape' => 'ListComponentsLimit', 'location' => 'querystring', 'locationName' => 'maxResults'], 'nextToken' => ['shape' => 'String', 'location' => 'querystring', 'locationName' => 'nextToken']]], 'ListComponentsResponse' => ['type' => 'structure', 'required' => ['entities'], 'members' => ['entities' => ['shape' => 'ComponentSummaryList'], 'nextToken' => ['shape' => 'String']]], 'ListThemesLimit' => ['type' => 'integer', 'max' => 100, 'min' => 1], 'ListThemesRequest' => ['type' => 'structure', 'required' => ['appId', 'environmentName'], 'members' => ['appId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'appId'], 'environmentName' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'environmentName'], 'maxResults' => ['shape' => 'ListThemesLimit', 'location' => 'querystring', 'locationName' => 'maxResults'], 'nextToken' => ['shape' => 'String', 'location' => 'querystring', 'locationName' => 'nextToken']]], 'ListThemesResponse' => ['type' => 'structure', 'required' => ['entities'], 'members' => ['entities' => ['shape' => 'ThemeSummaryList'], 'nextToken' => ['shape' => 'String']]], 'MutationActionSetStateParameter' => ['type' => 'structure', 'required' => ['componentName', 'property', 'set'], 'members' => ['componentName' => ['shape' => 'String'], 'property' => ['shape' => 'String'], 'set' => ['shape' => 'ComponentProperty']]], 'Predicate' => ['type' => 'structure', 'members' => ['and' => ['shape' => 'PredicateList'], 'field' => ['shape' => 'String'], 'operand' => ['shape' => 'String'], 'operator' => ['shape' => 'String'], 'or' => ['shape' => 'PredicateList']]], 'PredicateList' => ['type' => 'list', 'member' => ['shape' => 'Predicate']], 'RefreshTokenRequest' => ['type' => 'structure', 'required' => ['provider', 'refreshTokenBody'], 'members' => ['provider' => ['shape' => 'TokenProviders', 'location' => 'uri', 'locationName' => 'provider'], 'refreshTokenBody' => ['shape' => 'RefreshTokenRequestBody']], 'payload' => 'refreshTokenBody'], 'RefreshTokenRequestBody' => ['type' => 'structure', 'required' => ['token'], 'members' => ['token' => ['shape' => 'SensitiveString']]], 'RefreshTokenResponse' => ['type' => 'structure', 'required' => ['accessToken', 'expiresIn'], 'members' => ['accessToken' => ['shape' => 'SensitiveString'], 'expiresIn' => ['shape' => 'Integer']]], 'ResourceConflictException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 409, 'senderFault' => \true], 'exception' => \true], 'ResourceNotFoundException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 404, 'senderFault' => \true], 'exception' => \true], 'SensitiveString' => ['type' => 'string', 'sensitive' => \true], 'ServiceQuotaExceededException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 402, 'senderFault' => \true], 'exception' => \true], 'SortDirection' => ['type' => 'string', 'enum' => ['ASC', 'DESC']], 'SortProperty' => ['type' => 'structure', 'required' => ['direction', 'field'], 'members' => ['direction' => ['shape' => 'SortDirection'], 'field' => ['shape' => 'String']]], 'SortPropertyList' => ['type' => 'list', 'member' => ['shape' => 'SortProperty']], 'String' => ['type' => 'string'], 'SyntheticTimestamp_date_time' => ['type' => 'timestamp', 'timestampFormat' => 'iso8601'], 'TagKey' => ['type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^(?!aws:)[a-zA-Z+-=._:/]+$'], 'TagValue' => ['type' => 'string', 'max' => 256, 'min' => 1], 'Tags' => ['type' => 'map', 'key' => ['shape' => 'TagKey'], 'value' => ['shape' => 'TagValue']], 'Theme' => ['type' => 'structure', 'required' => ['appId', 'createdAt', 'environmentName', 'id', 'name', 'values'], 'members' => ['appId' => ['shape' => 'String'], 'createdAt' => ['shape' => 'SyntheticTimestamp_date_time'], 'environmentName' => ['shape' => 'String'], 'id' => ['shape' => 'Uuid'], 'modifiedAt' => ['shape' => 'SyntheticTimestamp_date_time'], 'name' => ['shape' => 'ThemeName'], 'overrides' => ['shape' => 'ThemeValuesList'], 'tags' => ['shape' => 'Tags'], 'values' => ['shape' => 'ThemeValuesList']]], 'ThemeList' => ['type' => 'list', 'member' => ['shape' => 'Theme']], 'ThemeName' => ['type' => 'string', 'max' => 255, 'min' => 1], 'ThemeSummary' => ['type' => 'structure', 'required' => ['appId', 'environmentName', 'id', 'name'], 'members' => ['appId' => ['shape' => 'String'], 'environmentName' => ['shape' => 'String'], 'id' => ['shape' => 'Uuid'], 'name' => ['shape' => 'ThemeName']]], 'ThemeSummaryList' => ['type' => 'list', 'member' => ['shape' => 'ThemeSummary']], 'ThemeValue' => ['type' => 'structure', 'members' => ['children' => ['shape' => 'ThemeValuesList'], 'value' => ['shape' => 'String']]], 'ThemeValues' => ['type' => 'structure', 'members' => ['key' => ['shape' => 'String'], 'value' => ['shape' => 'ThemeValue']]], 'ThemeValuesList' => ['type' => 'list', 'member' => ['shape' => 'ThemeValues']], 'TokenProviders' => ['type' => 'string', 'enum' => ['figma']], 'UpdateComponentData' => ['type' => 'structure', 'members' => ['bindingProperties' => ['shape' => 'ComponentBindingProperties'], 'children' => ['shape' => 'ComponentChildList'], 'collectionProperties' => ['shape' => 'ComponentCollectionProperties'], 'componentType' => ['shape' => 'ComponentType'], 'events' => ['shape' => 'ComponentEvents'], 'id' => ['shape' => 'Uuid'], 'name' => ['shape' => 'ComponentName'], 'overrides' => ['shape' => 'ComponentOverrides'], 'properties' => ['shape' => 'ComponentProperties'], 'schemaVersion' => ['shape' => 'String'], 'sourceId' => ['shape' => 'String'], 'variants' => ['shape' => 'ComponentVariants']]], 'UpdateComponentRequest' => ['type' => 'structure', 'required' => ['appId', 'environmentName', 'id', 'updatedComponent'], 'members' => ['appId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'appId'], 'clientToken' => ['shape' => 'String', 'idempotencyToken' => \true, 'location' => 'querystring', 'locationName' => 'clientToken'], 'environmentName' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'environmentName'], 'id' => ['shape' => 'Uuid', 'location' => 'uri', 'locationName' => 'id'], 'updatedComponent' => ['shape' => 'UpdateComponentData']], 'payload' => 'updatedComponent'], 'UpdateComponentResponse' => ['type' => 'structure', 'members' => ['entity' => ['shape' => 'Component']], 'payload' => 'entity'], 'UpdateThemeData' => ['type' => 'structure', 'required' => ['values'], 'members' => ['id' => ['shape' => 'Uuid'], 'name' => ['shape' => 'ThemeName'], 'overrides' => ['shape' => 'ThemeValuesList'], 'values' => ['shape' => 'ThemeValuesList']]], 'UpdateThemeRequest' => ['type' => 'structure', 'required' => ['appId', 'environmentName', 'id', 'updatedTheme'], 'members' => ['appId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'appId'], 'clientToken' => ['shape' => 'String', 'idempotencyToken' => \true, 'location' => 'querystring', 'locationName' => 'clientToken'], 'environmentName' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'environmentName'], 'id' => ['shape' => 'Uuid', 'location' => 'uri', 'locationName' => 'id'], 'updatedTheme' => ['shape' => 'UpdateThemeData']], 'payload' => 'updatedTheme'], 'UpdateThemeResponse' => ['type' => 'structure', 'members' => ['entity' => ['shape' => 'Theme']], 'payload' => 'entity'], 'Uuid' => ['type' => 'string']]];
