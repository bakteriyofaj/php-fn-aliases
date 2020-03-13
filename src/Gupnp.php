<?php

namespace BakteriyoFaj\PhpFnAliases;

class Gupnp extends PhpMethodCaller
{
    const ContextGetHostIp                      = "gupnp_context_get_host_ip";                       // Get the IP address
    const ContextGetPort                        = "gupnp_context_get_port";                          // Get the port
    const ContextGetSubscriptionTimeout         = "gupnp_context_get_subscription_timeout";          // Get the event subscription timeout
    const ContextHostPath                       = "gupnp_context_host_path";                         // Start hosting
    const ContextNew                            = "gupnp_context_new";                               // Create a new context
    const ContextSetSubscriptionTimeout         = "gupnp_context_set_subscription_timeout";          // Sets the event subscription timeout
    const ContextTimeoutAdd                     = "gupnp_context_timeout_add";                       // Sets a function to be called at regular intervals
    const ContextUnhostPath                     = "gupnp_context_unhost_path";                       // Stop hosting
    const ControlPointBrowseStart               = "gupnp_control_point_browse_start";                // Start browsing
    const ControlPointBrowseStop                = "gupnp_control_point_browse_stop";                 // Stop browsing
    const ControlPointCallbackSet               = "gupnp_control_point_callback_set";                // Set control point callback
    const ControlPointNew                       = "gupnp_control_point_new";                         // Create a new control point
    const DeviceActionCallbackSet               = "gupnp_device_action_callback_set";                // Set device callback function
    const DeviceInfoGetService                  = "gupnp_device_info_get_service";                   // Get the service with type
    const DeviceInfoGet                         = "gupnp_device_info_get";                           // Get info of root device
    const RootDeviceGetAvailable                = "gupnp_root_device_get_available";                 // Check whether root device is available
    const RootDeviceGetRelativeLocation         = "gupnp_root_device_get_relative_location";         // Get the relative location of root device
    const RootDeviceNew                         = "gupnp_root_device_new";                           // Create a new root device
    const RootDeviceSetAvailable                = "gupnp_root_device_set_available";                 // Set whether or not root_device is available
    const RootDeviceStart                       = "gupnp_root_device_start";                         // Start main loop
    const RootDeviceStop                        = "gupnp_root_device_stop";                          // Stop main loop
    const ServiceActionGet                      = "gupnp_service_action_get";                        // Retrieves the specified action arguments
    const ServiceActionReturnError              = "gupnp_service_action_return_error";               // Return error code
    const ServiceActionReturn                   = "gupnp_service_action_return";                     // Return successfully
    const ServiceActionSet                      = "gupnp_service_action_set";                        // Sets the specified action return values
    const ServiceFreezeNotify                   = "gupnp_service_freeze_notify";                     // Freeze new notifications
    const ServiceInfoGetIntrospection           = "gupnp_service_info_get_introspection";            // Get resource introspection of service
    const ServiceInfoGet                        = "gupnp_service_info_get";                          // Get full info of service
    const ServiceIntrospectionGetStateVariable  = "gupnp_service_introspection_get_state_variable";  // Returns the state variable data
    const ServiceNotify                         = "gupnp_service_notify";                            // Notifies listening clients
    const ServiceProxyActionGet                 = "gupnp_service_proxy_action_get";                  // Send action to the service and get value
    const ServiceProxyActionSet                 = "gupnp_service_proxy_action_set";                  // Send action to the service and set value
    const ServiceProxyAddNotify                 = "gupnp_service_proxy_add_notify";                  // Sets up callback for variable change notification
    const ServiceProxyCallbackSet               = "gupnp_service_proxy_callback_set";                // Set service proxy callback for signal
    const ServiceProxyGetSubscribed             = "gupnp_service_proxy_get_subscribed";              // Check whether subscription is valid to the service
    const ServiceProxyRemoveNotify              = "gupnp_service_proxy_remove_notify";               // Cancels the variable change notification
    const ServiceProxySendAction                = "gupnp_service_proxy_send_action";                 // Send action with multiple parameters synchronously
    const ServiceProxySetSubscribed             = "gupnp_service_proxy_set_subscribed";              // (Un)subscribes to the service
    const ServiceThawNotify                     = "gupnp_service_thaw_notify";                       // Sends out any pending notifications and stops queuing of new ones
}