<?php

namespace WP_Cloud_Search\Aws\DataSync;

use WP_Cloud_Search\Aws\AwsClient;
/**
 * This client is used to interact with the **AWS DataSync** service.
 * @method \Aws\Result cancelTaskExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelTaskExecutionAsync(array $args = [])
 * @method \Aws\Result createAgent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAgentAsync(array $args = [])
 * @method \Aws\Result createLocationEfs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLocationEfsAsync(array $args = [])
 * @method \Aws\Result createLocationFsxLustre(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLocationFsxLustreAsync(array $args = [])
 * @method \Aws\Result createLocationFsxOntap(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLocationFsxOntapAsync(array $args = [])
 * @method \Aws\Result createLocationFsxOpenZfs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLocationFsxOpenZfsAsync(array $args = [])
 * @method \Aws\Result createLocationFsxWindows(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLocationFsxWindowsAsync(array $args = [])
 * @method \Aws\Result createLocationHdfs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLocationHdfsAsync(array $args = [])
 * @method \Aws\Result createLocationNfs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLocationNfsAsync(array $args = [])
 * @method \Aws\Result createLocationObjectStorage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLocationObjectStorageAsync(array $args = [])
 * @method \Aws\Result createLocationS3(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLocationS3Async(array $args = [])
 * @method \Aws\Result createLocationSmb(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLocationSmbAsync(array $args = [])
 * @method \Aws\Result createTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTaskAsync(array $args = [])
 * @method \Aws\Result deleteAgent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAgentAsync(array $args = [])
 * @method \Aws\Result deleteLocation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLocationAsync(array $args = [])
 * @method \Aws\Result deleteTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTaskAsync(array $args = [])
 * @method \Aws\Result describeAgent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAgentAsync(array $args = [])
 * @method \Aws\Result describeLocationEfs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLocationEfsAsync(array $args = [])
 * @method \Aws\Result describeLocationFsxLustre(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLocationFsxLustreAsync(array $args = [])
 * @method \Aws\Result describeLocationFsxOntap(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLocationFsxOntapAsync(array $args = [])
 * @method \Aws\Result describeLocationFsxOpenZfs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLocationFsxOpenZfsAsync(array $args = [])
 * @method \Aws\Result describeLocationFsxWindows(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLocationFsxWindowsAsync(array $args = [])
 * @method \Aws\Result describeLocationHdfs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLocationHdfsAsync(array $args = [])
 * @method \Aws\Result describeLocationNfs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLocationNfsAsync(array $args = [])
 * @method \Aws\Result describeLocationObjectStorage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLocationObjectStorageAsync(array $args = [])
 * @method \Aws\Result describeLocationS3(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLocationS3Async(array $args = [])
 * @method \Aws\Result describeLocationSmb(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLocationSmbAsync(array $args = [])
 * @method \Aws\Result describeTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTaskAsync(array $args = [])
 * @method \Aws\Result describeTaskExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTaskExecutionAsync(array $args = [])
 * @method \Aws\Result listAgents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAgentsAsync(array $args = [])
 * @method \Aws\Result listLocations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLocationsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result listTaskExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTaskExecutionsAsync(array $args = [])
 * @method \Aws\Result listTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTasksAsync(array $args = [])
 * @method \Aws\Result startTaskExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startTaskExecutionAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateAgent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAgentAsync(array $args = [])
 * @method \Aws\Result updateLocationHdfs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLocationHdfsAsync(array $args = [])
 * @method \Aws\Result updateLocationNfs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLocationNfsAsync(array $args = [])
 * @method \Aws\Result updateLocationObjectStorage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLocationObjectStorageAsync(array $args = [])
 * @method \Aws\Result updateLocationSmb(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLocationSmbAsync(array $args = [])
 * @method \Aws\Result updateTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTaskAsync(array $args = [])
 * @method \Aws\Result updateTaskExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTaskExecutionAsync(array $args = [])
 */
class DataSyncClient extends AwsClient
{
}
