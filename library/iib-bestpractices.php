<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
            IIB Best Practices | Miracle
        </title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../css/default.css" rel="stylesheet" type="text/css">
        <link href="../css/component.css" rel="stylesheet" type="text/css">
        <script src="js/modernizr.custom.js"></script><!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="../images/favicon.ico" rel="shortcut icon">
    </head><!--/head-->
    <?php include '../header.php';?>
    <body>
        <section class="container" id="about-us">
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-7 text-left">
                    <h1>
                Best Practices for <br><strong>IBM Integration Bus Deployments</strong>
                    </h1>

                </div>
                <div class="col-sm-3 text-right">
                    <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li>
                            <a href="index.php">Library</a>
                        </li>
                        <li class="active">IIB Best Practices
                        </li>
                    </ul>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <hr>
                    <h5 class="heavy noMargin">Introduction
                    </h5>
                    <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">
                      This document presents some findings and recommendations concerning the use of <strong>IBM Integration Bus</strong>. These findings were developed from previous experiences of various integration projects. It covers the aspects of IIB development encompassing Message Set guidelines, Message Flow guidelines and Deployment guidelines.
                    </p>
                     <h5 class="heavy noMargin">Best Practices</h5>
                      <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <h6 class="heavy noMargin">
                 Understand the Interface Business Requirement
                 </h6>
                 <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                     <p class="methodText">
                    <ul>
                        <li>The first key to successful Technical Design and Interface Development is a firm knowledge of the intended business logic and structure</li>
                        <li>The source to the Business Requirement is to acquire a firm and defined Functional Specification. To some degree, the Functional Specification may undergo a few minor amendments while the task of Technical Specification is underway. However, it is expected that the Functional Specification has defined all the messages, components and processes that are required for the interface before the commencement of Technical Design</li>
                        <li>There may be (and usually is) multiple components to each interface, and in IIB terms, that boils down to Adapters and Message Flows</li>
                        <li>The Functional Specification is used to define where the Business Requirements are met in terms of various components. It is required to consider the various options available and create a design that is based on workable functionality of IIB, and to hopefully end up with a reasonable level of maintainability and performance as well</li>
                    </ul>
                                        </p>
                </div>     
               <div class="col-sm-1"></div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                    <div class="col-sm-5">
                     <h6 class="heavy noMargin">
               Common Control Handling
                 </h6>
                 <div class="row">
                    <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                 <ul>
                     <li>The flow of each message through a IIB interface should be ‘Control Handled’ for audit and logging purpose. For this reason, there is a requirement to have a ‘Control Mechanism’ in each and every message flow. </li>
                     <li>It is recommended to have a ‘Common Control Handling’ routine/component that can be re-used extensively by all interfaces of the project.</li>
                 </ul>
                     <h6 class="heavy noMargin">
                 Common Characteristics of Interfaces
                 </h6>
                  <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                 <ul>
                     <li>Each IIB Interface designed for the project should have certain characteristics, which are assumed to be common across all implemented interfaces</li>
                     <li>These common characteristics generally refer to some common routines and flows or sub-flows, which are recommended to be used globally across all interfaces in that project</li>
                 </ul>  
         
                    
                    </div>
                     <div class="col-sm-5">
                         <h6 class="heavy noMargin">
               Common Error/Exception Handling
                 </h6>
                 <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <ul>
                        <li>Each IIB interface shall have a mechanism to handle errors/exceptions. These errors/exceptions refer to both Systems generated ones as well as User Generated ones.</li>
                        <li>It is recommended to have a common Error Handling Procedure/Module to handle all errors/exceptions that arise during execution of an interface.</li>
                        <li>This Procedure/Module shall be extensively re-used by all interfaces of the project.</li>
                   </ul>  
                        
                 <h6 class="heavy noMargin">
                 Interface design Layout
                 </h6>
                 <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <ul>
                        <li>The IIB interfaces to be implemented should have certain common characteristics so that reuse of components is optimized</li>
                        <li>The design of the message flows should adhere to one or more of the pattern templates laid out for the project</li>
                    </ul>   
                     </div>
                     
                     <div class="col-sm-1"></div>
            </div>
    
</div>
           <div class="row">
               <div class="col-sm-1"></div>
               <div class="col-sm-10">
                 <h6 class="heavy noMargin">
                Common Routines and Sub-Flows
                 </h6>
                 <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                 <p class="methodText">
                    Many message flows require to perform certain functions like re-formatting a date, getting current date, getting a unique identifier, etc which can be laid down as common routines for reuse by the interfaces. Also there may be certain processes like adding an RFH2 header to a message, etc which can also be laid down as common sub-flows for reuse by interfaces.
                 </p>
                 <p class="methodText">
                     It is recommended to have a set of common routines and sub-flows for the project that can be extensively reused by the interfaces. The contents of this set cannot be defined exhaustively at any point of time. This set shall continually be gaining members from time to time in order to meet requirements.
                </p>
                </div>
                  <div class="col-sm-1"></div>
                  </div>
                  
                  <div class="row">
                      <div class="col-sm-1"></div>
                   <div class="col-sm-5"> 
               <h6 class="heavy noMargin">
                Location of Integration Logic
                 </h6>
                <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                  
                     <ul>
                <li>An interface is comprised of Adapters and Message Flows</li>
                <li>The integration logic is therefore contained wholly within the adapters and message flows</li>
                <li>The interface designer has the option of building any required integration logic in the adapters or message flows</li>
                <li>It is recommended that as much business logic as possible will be performed in message flows rather than in the adapters. In essence logic is only to be located in adapters if that is the only option for the interface.</li>
                <li>In other words, adapters will me made as simple as possible. The core of the business logic should be kept in WMB.</li>
                </ul>
                </div>  
       
                <div class="col-sm-5">
                <ul><br/><br/>
                <strong> The benefits of this approach are:</strong>
                    <li>The interface solutions are pattern based, with the patterns represented by WMB message flows. Being pattern based, enhances reusability.</li>
                    <li>Scaling and resilience is simplified with fewer complex components to consider.</li>
                    <li>Maintenance requirements are easier to define and execute, by largely avoiding the need to change one component to accommodate the change in another requirement.</li>        
                </ul>
                 </div>
          
       <div class="col-sm-1"></div>
           </div>
          
           <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <h6 class="heavy noMargin">
                        Understand the Input and Output Messages
                        </h6>
                   <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">
                            It should be possible to examine the Functional Specification and determine what the input is, and what the output would be. From this standpoint, the WMB message flow can be regarded as the instrument to convert the input message into output message(s).
                        </p>
                      </div>
                        <div class="col-sm-1"></div>       
            </div>
                        <div class="row">
                            <div class="col-sm-1"></div>
                        <div class="col-sm-5">
                            <h6 class="heavy noMargin">Determine how many Message Flows are needed</h6>
                        <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                       <ul>
                          <li> First, at an application system level, it must be determined how many flows will be required for an interface. Out of this determination, it will be possible to determine how many types of messages a flow must handle.</li>
                            <li>Sometimes there is just one input message format and one output message format. Other times there are multiple messages for a given flow and there must be logic within the flow to sort them out.</li>
                       </ul>
                      <br>
                            <h6 class="heavy noMargin"> Message Routing within a flow</h6>
                        <div class="row">
                                        <div class="col-sm-3">
                                            <hr>
                                        </div><!-- This is the divider line between the heading and the content -->
                                    </div>
                    <ul>
                        <li>Routing within the flow should be minimized where possible. When routing is required, then the rule about minimizing the number of nodes still applies.</li>
                        <li>For a number of reasons, some message flows process more than one message type. In this case it is important to understand the distribution of these different message types and their importance so that the most critical or most frequent messages go through the cheapest path; i.e. the one with fewest and simplest nodes.</li>
                        <li>When more than one message is processed in a flow, or when there is a requirement for dynamic logic inside a flow based on message content, there are at least two ways to direct the processing logic inside the flow.</li>
                        <li>One way is through the use of RouteToLabel node. This node makes use of the Destination List array of the LocalEnvironment Tree of a message flow. When the message arrives, the Destination List is populated according to the business requirement, and the RouteToLabel and Label nodes are used to direct subsequent processing.</li>
                    </ul>
                        </div>
                        
                         <div class="col-sm-5">
                            <h6 class="heavy noMargin">Complete the processing with as few nodes as possible</h6>
                         <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                        <ul>
                            <li>The most fundamental recommendation to consider when writing a message flow is to be as concise as possible. There is a performance cost associated with passing through each of the built-in nodes of IIB, so it is best to write message flows in as few nodes as possible.</li>
                            <li>In other words, there should be as few as possible nodes between the input and output formats for a given business requirement.</li>
                        </ul>
                        <br>
                        <h6 class="heavy noMargin">   Sub-Flows</h6>
                    <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <ul>
                        <li>Message Flows can be divided into SubFlows. Essentially, a Subflow is a sequence of nodes that begins with an Input node and ends in an Output node. The object of using SubFlows is that functions can be logically segregated in a way that increases maintainability and offers opportunity for reuse.</li>
                    </ul>
                    <h6 class="heavy noMargin">Transactionality and Persistence </h6>
                        <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <ul>
                            <li>As a rule, all messages should be handled as a Transaction. </li>
                            <li>In the Input, Output and Compute nodes, the Transactionality should always be set to ‘Automatic’. This practice allows the WebSphere MQ message attributes to control the Transactionality of the flow; i.e. if a message is read from a queue with an attribute of ‘Persistent’, IIB will supply the appropriate logging to guarantee the Transactionality of the message.</li>
                            <li>It must be considered that overhead is incurred by making a message transactional. This is caused by the need to save all the data necessary to enable a roll back should a failure condition occur in a message flow.</li>
                    </ul>
                </div>
             </div>
             <div class="row">
                 <div class="col-sm-1"></div>
             <div class="col-sm-10">
                 <h6 class="heavy noMargin">  Use of CARDINALITY</h6>
                 <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                 <p class="methodText">
                    The use of the CARDINALITY function should be restricted to minimum as it requires the parser to process a large portion of the message and thereby hindering performance. This built-in function should not be used inside a loop unless it is inevitable.                     
                 </p>
                 <h6 class="heavy noMargin">ESQL REFERENCE Variable </h6>
                 <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                 <ul>
                     <li>Reference variables can be used in ESQL to store a part or an entire message tree location and can be thought of as being similar to a C/C++ pointer to a message element. The use of REFERENCE variable is recommended in ESQL for two reasons:</li>
                     <li>They reduce coding considerably, especially, when large message tree with deep hierarchy has been defined.</li>
                     <li>They make ESQL more efficient when used appropriately.</li>
                     <li>Reference variables can be used to store locations in any type of message tree (InputRoot, OutputRoot, LocalEnvironment, Environment, etc).</li>
                     
                 </ul>
                     </div>
                 </div>     
             <div class="row">
                 <div class="col-sm-1"></div>
                 <div class="col-sm-5">
                <h6 class="heavy noMargin"> Backout Processing Considerations </h6>
            <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
            <ul>
                 <li>When an exception is thrown within a message flow and is not caught by inclusion of a TryCatch Node, The Input Node for the message flow catches it. If the catch terminal of the MQInput Node is connected, the message is propagated to this terminal and is processed according to the message flow logic.</li>
                 <li>If the Catch terminal of the MQInput Node is not connected, the transaction is rolled back. If the message was read under a syncpoint the original remains in the queue but WebSphere MQ increments the MQMD BackoutCount. </li>
                 <li>The MQInput Node then reads the message once again.</li>
                 <li>The MQMD BackoutCount is examined before the message is processed again. If it is not zero then it implies that the message received by the message flow is a backed out message and the broker then performs backout processing.</li>
            </ul>
                </div>
                <div class="col-sm-5">
            <ul><br><br>
                 <li>If the MQMD BackoutCount is less than the Backout Requeue Threshold attribute specified in the queue definition, the message is propagated through the output terminal of the MQInput Node for normal processing once again. </li>
                 <li>If the MQMD BackoutCount is not less than the Backout Requeue Threshold attribute specified in the queue definition, the message is propagated through the Failure terminal of the MQInput Node.</li>
                 <li>If the Failure terminal is wired then it follows that path but, if it is not wired the Backout Requeue Name attribute is looked for and if a queue name found in this attribute, the message is put into that queue.</li>
                 <li>If no name is specified in the Backout Requeue Name attribute, the message is written to the default Dead Letter Queue defined for the queue manager. </li>
                 <li>If the message could not be written to the Dead Letter Queue then it remains in the Input Queue.</li>             
             </ul>
             </div>
              <div class="col-sm-1"></div>
             </div>
             <div class="row">
                 <div class="col-sm-1"></div>
                 <div class="col-sm-10">
                     <h6 class="heavy noMargin">IIB Message Flow Standard Unit Test Conditions</h6>
                   <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>  
                    
                <ul>
                 <li>The following are the standard Unit Test Conditions that should be considered by a developer while performing Unit Test on an interface:</li>
                 <li>When a valid Test Data is passed through the message flow one or more output message(s) are created on the output queue(s). </li>
                 <li>When an invalid Test Data is passed through the message flow the message is propagated to the error handling queue for error processing.</li>
                 <li>All fields of the output message are of correct length and have been correctly formatted according to the requirements.</li>
                 <li>Where the message has repeating fields or structure, the interface works correctly for both single and multiple instances of the field or structure.</li>
                 <li>Where the message has an optional field or structure, the interface works correctly for both with and without the field or structure in the message.</li>
                 </ul>
          
                 <h5 class="heavy noMargin"> Important Structures</h5>
                 <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                <h6 class="heavy noMargin">MQMD – Message Descriptor</h6>             
                <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
             <p class="methodText">  
            The MQMD structure contains the control information that accompanies the application data when a message travels from one queue to another. 
          </p>
              </div>
               <div class="col-sm-1"></div>
           </div>
           <div class="row">
               <div class="col-sm-1"></div>
                        <div class="col-sm-5">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            Field
                                         </th>
                                        <th>
                                            Description
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            StrucId
                                        </td>
                                        <td>
                                           Structure Identifier
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                           Version
                                        </td>
                                        <td>
                                           Structure Version Number
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                       Report
                                        </td>
                                        <td>
                                           Option for report messages
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                           MsgType
                                        </td>
                                        <td>
                                        Message Type
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                          Expiry
                                        </td>
                                        <td>
                                       Message Lifetime
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        Feedback
                                        </td>
                                        <td>
                                         Feedback or Reason Code
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                           Encoding
                                        </td>
                                        <td>
                                          Numeric Encoding of message Data
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                          CodedCharSetId
                                        </td>
                                        <td>
                                         Character set identifier of message data
                                        </td>
                                    </tr>
                                   <tr>
                                      <td> MsgId</td>
                                      <td>Message Identifier</td>
                                    </tr>
                                   <tr>
                                        <td> User Identifier</td>
                                        <td>User Identifier</td>
                                    </tr>
                                    <tr>
                                        <td>AccountingToken</td>
                                        <td>Accounting Token</td>
                                    </tr>
                                    <tr>
                                        <td>ApplIdentityData</td>
                                        <td>Application data relating to identity</td>
                                    </tr>
                                    <tr>
                                        <td>PutApplType</td>
                                        <td>Type of application that put the message</td>
                                    </tr>
                                    <tr>
                                        <td>PutApplName</td>
                                        <td>Name of application that put the message</td>
                                    </tr>
                                    <tr>
                                        <td>PutDate</td>
                                        <td>Date when message was put</td>
                                    </tr>
                                                      </tbody>
                   </table>
                        </div>
                        
                                  <div class="col-sm-5">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            Field


                                        </th>
                                        <th>
                                            Description
                                        </th>
                                    </tr>
                                </thead>                           

                                    <tr>
                                        <td>
                                          Format
                                        </td>
                                        <td>
                                        Format name of message data
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                          Priority
                                    </td>
                                        <td>
                                         Priority of message data
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                           Persistence
                                        </td>
                                        <td>
                                        Message Persistence
                                        </td>
                                    </tr>
                                  <tr>
                                        <td>MsgSeqNumber</td>
                                        <td>Sequence number of logical message within group</td>
                                    </tr> 
                                    <tr>
                                      <td>CorrelId</td>
                                      <td>Correlation Identifier</td>
                                    </tr>
                                     <tr>
                                      <td>BackoutCount</td>
                                      <td>BackoutCounter</td>
                                    </tr>
                                     <tr>
                                      <td>ReplyToQ</td>
                                      <td>Name of Reply Queue</td>
                                    </tr>
                                     <tr>
                                      <td>ReplyToQMgr</td>
                                      <td>Name of Reply Queue Manager</td>
                                    </tr>
                                        <tr>  
                                        <td>PutTime</td>
                                        <td>Time when message was put</td>
                                    </tr>
                                    <tr>
                                        <td>ApplOriginData</td>
                                        <td>Application Data relating to origin</td>
                                    </tr>
                                    <tr>
                                        <td>GroupId</td>
                                        <td>Group Identifier</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Offset</td>
                                        <td>Offset of data in physical message from the start of logical message</td>
                                    </tr>
                                    <tr>
                                        <td>MsgFlags</td>
                                        <td>Message Flags</td>
                                    </tr>
                                    <tr>
                                        <td>Original Length</td>
                                        <td>Length of original message</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </div>
                           <div class="row">
               <div class="col-sm-1"></div>
                        <div class="col-sm-5">
                            <h6 class="heavy noMargin">MQRFH2 – Rules and Formatting Header </h6> 
                            <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                            <p class="methodText">
                            The MQRFH2 structure defines the layout of the rules and formatting header. This header can be used to send string data that has been encoded using an XML-like syntax. 
                           <br> It allows Unicode string to be transported without translations, and it can carry numeric data-types.
                            </p>
                            The following table summarizes the fields in the structure:
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            Field
                                         </th>
                                        <th>
                                            Description
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>              
                                <tr>
                                   <td> StrucId</td>
                                    <td>Structure Identifier</td>
                                    </tr>
                                    <tr>
                                        <td>Version </td>
                                        <td>Structure Version Number</td>
                                    </tr>
                                    <tr>
                                        <td>StrucLength</td>
                                        <td>The total length of MQRFH2</td>
                                    </tr>
                                    <tr>
                                        <td>Encoding</td>
                                        <td>Numeric encoding of data</td>
                                    </tr>
                                    <tr>
                                        <td>CodedCharSetId</td>
                                        <td>Character set identifier of data</td>
                                    </tr>
                                    <tr>
                                        <td>Format</td>
                                        <td>Format Name of data</td>
                                    </tr>
                                    <tr>
                                        <td>Flags</td>
                                        <td>Flags</td>
                                    </tr>
                                    <tr>
                                        <td>NameValueCCSID</td>
                                        <td>Character set identifier of Name Value data</td>
                                    </tr>
                                    <tr>
                                        <td>NameValueLength</td>
                                        <td>Length of Name Value data</td>
                                    </tr>
                                    <tr>
                                        <td>NameValueData</td>
                                        <td>Name/Value data</td>
                                    </tr>
                                    
                                    </tbody>
                                    </table>
                            </div>
                            
                               <div class="col-sm-5">
                                   <h6 class="heavy noMargin">Properties – Message Flow</h6>
                                   <div class="row">
                                       <div class="col-sm-3">
                                           <hr>
                                       </div>
                                       </div>
                                    
                            <p class="methodText">
                                The Properties tree is the first element of the message tree and holds information about the characteristics of the message.
                            </p>
                                <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            Field
                                         </th>
                                        <th>
                                            Description
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
           
                                <tr>
                                        <td> MessageSet</td>
                                        <td>The Message Set Identifier</td>
                                    </tr>
                                    <tr>
                                        <td>MessageType</td>
                                        <td>The Message Name</td>
                                    </tr>
                                    <tr>
                                        <td>MessageFormat</td>
                                        <td>The Physical format of the message</td>
                                    </tr>
                                    <tr>
                                        <td>Encoding</td>
                                        <td>Numeric encoding of data</td>
                                    </tr>
                                    <tr>
                                        <td>CodedCharSetId</td>
                                        <td>Character set identifier of data</td>
                                    </tr><tr>
                                        <td>Transactional</td>
                                        <td>Boolean flag to indicate Transactionality</td>
                                    </tr>
                                    <tr>
                                        <td>Persistence</td>
                                        <td>Boolean flag to indicate Persistency</td>
                                    </tr>
                                    <tr>
                                        <td>CreationTime</td>
                                        <td>The put time of the message</td>
                                    </tr>
                                    <tr>
                                        <td>ExpirationTime</td>
                                        <td>The expiration time of the message</td>
                                    </tr>
                                    <tr>
                                        <td>Priority</td>
                                        <td>The priority of the message</td>
                                    </tr>
                                    <tr>
                                        <td>ReplyIdentifier</td>
                                        <td>The reply identifier</td>
                                    </tr>
                                    <tr>
                                        <td>ReplyProtocol</td>
                                        <td>The reply protocol</td>
                                    </tr>
                                   
                                    </tbody>
                                    </table>
                            </div>
                                  
                </div>
                         <div class="row">
                          <div class="col-sm-1"></div>
                          <div class="col-sm-10">
                              <h6 class="heavy noMargin"> Debug Tracing</h6>
                              <div class="row">
                                       <div class="col-sm-3">
                                           <hr>
                                       </div>
                                       </div>
                         <p class="methodText">
                         In the event of an error in a message flow, a debug level trace should be set up for the flow. This is done with the help of a set of commands to generate the debug trace file for diagnostics.    
                         </p>
                         <ul>
                             <li>Open a command prompt window.</li>
                             <li>Execute the command mqsichangetrace <Broker Name> -u -e <Execution Group Name> -l debug -f <Message Flow Name> -r</li>
                             <li>Execute the message flow with the message that you want to trace.</li>
                             <li>Execute the command mqsireadlog <Broker Name> -u -e <Execution Group Name> -l debug -f  <Message Flow Name> -o <Temporary File Name></li>
                             <li>Execute the command mqsiformatlog –i <Temporary File Name> -o <Trace File Name></li>
                             <li>Open the generated Trace files in a text editor and perform diagnosis.</li>
                         </ul>
                         </div>
                          <div class="col-sm-1"></div>
                      </div>     
                  <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                  
                    <p class="methodText" style="font-style: italic">
                     <strong>
                   Bhaskar Gara  <br>
                    General Manager Integration <br>
                       </strong>
                       Miracle Software Systems, Inc. <br>
                       April 6th, 2015
                    </p>
                    <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div><a href="../Documents/webMethods-Adapters.pdf"><button class="btn btn-primary btn-md" type="button">Download Product Brief</button></a><br>
                    <br>
                             <hr>
                    <!--Disqus-->
            <div id="disqus_thread">
          </div>
          <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES * * */
            var disqus_shortname = 'team-mss';
            
            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
              var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
              dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
              (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
          </script>
          
          <noscript>
            Please enable JavaScript to view the 
            <a href="https://disqus.com/?ref_noscript" rel="nofollow">
              comments powered by Disqus.
            </a>
          </noscript>
            <!--Disqus-->
                    
                </div>
                <div class="col-sm-1"></div>
            </div>
        </section><!--/#about-us-->
        <?php include '../footer.php';?>
    </body>
</html>