/*
    Count Array items(row) using PHP:
        json_encode(count($arrayvar));
    Count Array items(row) using JavaScript:
        arrayvar.length;

    To add an id to an HTML Element using JavaScript:
        htmlelementobject.setAttribute("id", "thisismyhtmlelementid");
    To add a class to an HTML Element using JavaScript:
        htmlelementobject.setAttribute("class", "thisismyhtmlelementclass");
*/

// ============================DECLARATIONS============================
// var "tbExam_data" is declared on "AdminExamList.php"

// Row Count for the Following Tables()
if(tbExam_data != null) { var tbExam_data_length = tbExam_data.length; }
else { var tbExam_data_length = 0; }

var isaddFieldExamsActive = false;

function baseExamList(in_displayContainerID, in_itemCount) {
    var container_element = document.getElementById(in_displayContainerID);
    
    // For Return
    const inputElements_obj = {};

    // Create Main (CONTAINER)
    var container_row_main = document.createElement("div");
    container_row_main.setAttribute("id", "i-div--examlist-list-" + (in_itemCount).toString());
    container_row_main.setAttribute("class", "row");
    // Insert Rows(CONTAINER)
    container_element.appendChild(container_row_main);
    // For Return
    inputElements_obj['examList_row'] = container_row_main;
        // Create Sub 1 (CONTAINER)
        var container_row_sub1 = document.createElement("div");
        container_row_sub1.setAttribute("class", "card");
        // Insert Rows(CONTAINER)
        container_row_main.appendChild(container_row_sub1);
            // Create Image (IMAGE)
            var container_row_image = document.createElement("img");
            container_row_image.setAttribute("class", "rounded-circle ms-1 mt-2 mb-2");
            container_row_image.setAttribute("alt", "Admin");
            container_row_image.setAttribute("width", "150");
            container_row_image.setAttribute("src", "../images/Small Logo.png");
            // Insert Rows(CONTAINER)
            container_row_sub1.appendChild(container_row_image);

            // Create Content Main (CONTAINER)
            var container_row_contentmain = document.createElement("div");
            container_row_contentmain.setAttribute("class", "card-body");
            // Insert Rows(CONTAINER)
            container_row_sub1.appendChild(container_row_contentmain);
                // Create Content Sub 1 (CONTAINER)
                var container_row_contentsub1 = document.createElement("div");
                container_row_contentsub1.setAttribute("class", "row");
                // Insert Rows(CONTAINER)
                container_row_contentmain.appendChild(container_row_contentsub1);
                    // Create Information (CONTAINER)
                    var container_row_info = document.createElement("div");
                    container_row_info.setAttribute("class", "col-sm-9 col-md-9 col-lg-10 mt-3");
                    // Insert Rows(CONTAINER)
                    container_row_contentsub1.appendChild(container_row_info);
                        // Insert Row for EXAMS ID==============================
                        // Create & Set (CELL CONTENT)
                        var insert_detail_text = document.createElement("h5");
                        insert_detail_text.setAttribute("id", "i-h--examlist-clExID-" + (in_itemCount).toString());
                        insert_detail_text.setAttribute("name", "clExID_value");
                        insert_detail_text.setAttribute("class", "card-title text-primary text-uppercase fs-4");
                        // Set (ROW)
                        container_row_info.appendChild(insert_detail_text);
                        // For Return
                        inputElements_obj['examList_clExID'] = insert_detail_text;

                        // Insert Row for EXAMS PUBLISH STATUS==============================
                        // Create & Set (CELL CONTENT)
                        var insert_detail_text = document.createElement("h5");
                        insert_detail_text.setAttribute("id", "i-h--examlist-clExPublish-" + (in_itemCount).toString());
                        insert_detail_text.setAttribute("name", "clExPublish_value");
                        insert_detail_text.setAttribute("class", "card-title text-primary text-uppercase fs-5");
                        // Set (ROW)
                        container_row_info.appendChild(insert_detail_text);
                        // For Return
                        inputElements_obj['examList_clExPublish'] = insert_detail_text;

                        // Insert Row for EXAMS LAST EDITOR==============================
                        // Create & Set (CELL CONTENT)
                        var insert_detail_text = document.createElement("h5");
                        insert_detail_text.setAttribute("id", "i-h--examlist-clExLastEditedBy-" + (in_itemCount).toString());
                        insert_detail_text.setAttribute("name", "clExLastEditedBy_value");
                        insert_detail_text.setAttribute("class", "card-title text-primary text-uppercase fs-5");
                        // Set (ROW)
                        container_row_info.appendChild(insert_detail_text);
                        // For Return
                        inputElements_obj['examList_clExLastEditedBy'] = insert_detail_text;

                        // Insert Row for EXAMS PUBLISHER==============================
                        // Create & Set (CELL CONTENT)
                        var insert_detail_text = document.createElement("h5");
                        insert_detail_text.setAttribute("id", "i-h--examlist-clExPublishedBy-" + (in_itemCount).toString());
                        insert_detail_text.setAttribute("name", "clExPublishedBy_value");
                        insert_detail_text.setAttribute("class", "card-title text-primary text-uppercase fs-5");
                        // Set (ROW)
                        container_row_info.appendChild(insert_detail_text);
                        // For Return
                        inputElements_obj['examList_clExPublishedBy'] = insert_detail_text;

                        // Insert Row for EXAMS TITLE==============================
                        // Create & Set (CELL CONTENT)
                        var insert_detail_text = document.createElement("h5");
                        insert_detail_text.setAttribute("id", "i-h--examlist-clExName-" + (in_itemCount).toString());
                        insert_detail_text.setAttribute("name", "clExName_value");
                        insert_detail_text.setAttribute("class", "card-title text-primary text-uppercase fs-1 fw-bold");
                        // Set (ROW)
                        container_row_info.appendChild(insert_detail_text);
                        // For Return
                        inputElements_obj['examList_clExName'] = insert_detail_text;

                        // Insert Row for EXAMS DESCRIPTION==============================
                        // Create & Set (CELL CONTENT)
                        var insert_detail_text = document.createElement("p");
                        insert_detail_text.setAttribute("id", "i-p--examlist-clExDescription-" + (in_itemCount).toString());
                        insert_detail_text.setAttribute("name", "clExDescription_value");
                        insert_detail_text.setAttribute("class", "card-text text-primary fs-5");
                        // Set (ROW)
                        container_row_info.appendChild(insert_detail_text);
                        // For Return
                        inputElements_obj['examList_clExDescription'] = insert_detail_text;
                    // Create Buttons (CONTAINER)
                    var container_row_buttons = document.createElement("div");
                    container_row_buttons.setAttribute("class", "col-sm-3 col-md-3 col-lg-2");
                    // Insert Rows(CONTAINER)
                    container_row_contentsub1.appendChild(container_row_buttons);
                        // Insert Row for EXAMS UPDATE & DELETE BUTTON==============================
                            // Create 'EDIT' Cell Content
                            var insert_modify_editbutton = document.createElement("a");
                            insert_modify_editbutton.setAttribute("id", "i-a--examlist-edit-" + (in_itemCount).toString());
                            insert_modify_editbutton.setAttribute("class", "btn btn-primary c-a--examlist");
                            insert_modify_editbutton.setAttribute("name", "modify_edit_button");
                            insert_modify_editbutton.innerHTML = "Edit Exam";
                            // Set (ROW)
                            container_row_buttons.appendChild(insert_modify_editbutton);
                            // For Return
                            inputElements_obj['examList_editbutton'] = insert_modify_editbutton;

                            // Create 'DELETE' Cell Content
                            var insert_modify_deletebutton = document.createElement("a");
                            insert_modify_deletebutton.setAttribute("id", "i-a--examlist-delete-" + (in_itemCount).toString());
                            insert_modify_deletebutton.setAttribute("class", "btn btn-primary mt-2 c-a--examlist");
                            insert_modify_deletebutton.setAttribute("name", "modify_delete_button");
                            insert_modify_deletebutton.innerHTML = "Delete Exam";
                            // Set (ROW)
                            container_row_buttons.appendChild(insert_modify_deletebutton);
                            // For Return
                            inputElements_obj['examList_deletebutton'] = insert_modify_deletebutton;

                            // Create 'PUBLISH' Cell Content
                            var insert_modify_publishbutton = document.createElement("a");
                            insert_modify_publishbutton.setAttribute("id", "i-a--examlist-publish-" + (in_itemCount).toString());
                            insert_modify_publishbutton.setAttribute("class", "btn btn-primary mt-2 c-a--examlist");
                            insert_modify_publishbutton.setAttribute("name", "modify_publish_button");
                            // Set (ROW)
                            container_row_buttons.appendChild(insert_modify_publishbutton);
                            // For Return
                            inputElements_obj['examList_publishbutton'] = insert_modify_publishbutton;

    return inputElements_obj;
}

function displayExamList(in_displayContainerID, in_itemCount) {
    var container_element = document.getElementById(in_displayContainerID);

    // Check if the container exists and is defined, if not, exit
    if(container_element === undefined || container_element === null) { return; }
    
    // Check if there are any rows in the fetched database table, if none, print this message and exit
    toggleEmptyText(in_itemCount, "i-div--examlist-empty", in_displayContainerID);
    if(in_itemCount <= 0) { return; }
    
    // Insert Row for EXAMS DETAILS==============================
    for(var examsList_count = 0; examsList_count < in_itemCount; examsList_count++) {
        var inputElements_obj = baseExamList(in_displayContainerID, examsList_count+1);
        
        if(tbExam_data[examsList_count]['clExPublish'] == 0) {
            clExPublish_text_value = "Exam Publish Status: Editable";
            publishButton_text_value = "Publish";
            inputElements_obj['examList_publishbutton'].setAttribute("onclick", "modifyExamList(this.name," + null + "," + JSON.stringify(inputElements_obj['examList_row'].id) + ")");
        }
        else if(tbExam_data[examsList_count]['clExPublish'] == 1) {
            clExPublish_text_value = "Exam Publish Status: Published";
            publishButton_text_value = "Published";
            inputElements_obj['examList_publishbutton'].setAttribute("onclick", "");
        }

        if(tbExam_data[examsList_count].clExLastEditedBy == null) {
            clExLastEditedBy_username_value = "N/A";
        }
        else {
            var in_clExLastEditedByIndex = (tbusers_data).findIndex(function (in_tbusers_data) {
                return in_tbusers_data.clUrID == tbExam_data[examsList_count].clExLastEditedBy;
            });
            clExLastEditedBy_username_value = tbusers_data[in_clExLastEditedByIndex].clUrUsername;
        }

        if(tbExam_data[examsList_count].clExPublishedBy == null) {
            clExPublishedBy_username_value = "N/A";
        }
        else {
            var in_clExPublishedByIndex = (tbusers_data).findIndex(function (in_tbusers_data) {
                return in_tbusers_data.clUrID == tbExam_data[examsList_count].clExPublishedBy;
            });
            clExPublishedBy_username_value = tbusers_data[in_clExPublishedByIndex].clUrUsername;
        }

        inputElements_obj['examList_clExID'].innerHTML = "Exam ID #" + tbExam_data[examsList_count]['clExID'];
        inputElements_obj['examList_clExPublish'].innerHTML = clExPublish_text_value;
        inputElements_obj['examList_clExLastEditedBy'].innerHTML = "Last Edited By: " + clExLastEditedBy_username_value;
        inputElements_obj['examList_clExPublishedBy'].innerHTML = "Published By: " + clExPublishedBy_username_value;
        inputElements_obj['examList_clExName'].innerHTML = tbExam_data[examsList_count]['clExName'];
        inputElements_obj['examList_clExDescription'].innerHTML = tbExam_data[examsList_count]['clExDescription'];
        inputElements_obj['examList_editbutton'].setAttribute("onclick", "modifyExamList(this.name," + tbExam_data[examsList_count]['clExID'] + "," + null + ")");
        inputElements_obj['examList_deletebutton'].setAttribute("onclick", "modifyExamList(this.name," + null + "," + JSON.stringify(inputElements_obj['examList_row'].id) + ")");
        inputElements_obj['examList_publishbutton'].innerHTML = publishButton_text_value;

        inputElements_obj = undefined;
    }
}

function deleteExamData(in_elementRowID) {
    var exam_saveArrayIndex = Number((in_elementRowID).substring((in_elementRowID).lastIndexOf("-")+1)) - 1;
    var elementRow_element = document.getElementById(in_elementRowID);
    
    // Pass to '../crud/admin_examlist_update.php' for Database Insertion
    $(document).ready(function(){
        $.ajax({
            url: "../crud/admin_examlist_update.php", 
            type: "POST", 
            data: {
                clExID_ajax: tbExam_data[exam_saveArrayIndex].clExID, 
                updateType_ajax: 0
            }, 
            // contentType: false, 
            // processData: false, 
            // async: false, 
            cache: false, 
            success: function(data) {
                // alert(data);
                alert('SUCCESS: Exam deleted.');

                tbExam_data.splice(exam_saveArrayIndex,1);

                // Delete in_element
                $(elementRow_element).remove();
            }, 
            error: function(data) {
                // alert(data);
                alert('ERROR: An error occured while saving the Exam.');
            }
        });
    });
}

function setPublishStatus(in_setDisabledStatus,in_exam_saveArrayIndex) {
    var examPublishStatus_element = document.getElementById("i-h--examlist-clExPublish-" + (in_exam_saveArrayIndex + 1));
    var examPublishedBy_element = document.getElementById("i-h--examlist-clExPublishedBy-" + (in_exam_saveArrayIndex + 1));
    var examPublishButton_element = document.getElementById("i-a--examlist-publish-" + (in_exam_saveArrayIndex + 1));

    tbExam_data[in_exam_saveArrayIndex].clExPublishedBy = curr_clUrID_value;
    examPublishedBy_element.innerHTML = "Published By: " + curr_clUrUsername_value;

    if(in_setDisabledStatus) {
        tbExam_data[in_exam_saveArrayIndex].clExPublish = 1;
        examPublishStatus_element.innerHTML = "Published";
        examPublishButton_element.innerHTML = "Published";
        examPublishButton_element.setAttribute("onclick", "");
    }
    else {
        tbExam_data[in_exam_saveArrayIndex].clExPublish = 0;
        examPublishStatus_element.innerHTML = "Editable";
        examPublishButton_element.innerHTML = "Publish";
    }

    // Pass to '../crud/admin_examlist_update.php' for Database Insertion
    $(document).ready(function(){
        $.ajax({
            url: "../crud/admin_examlist_update.php", 
            type: "POST", 
            data: {
                clExID_ajax: tbExam_data[in_exam_saveArrayIndex].clExID, 
                clExPublish_ajax: tbExam_data[in_exam_saveArrayIndex].clExPublish, 
                clExPublishedBy_ajax: tbExam_data[in_exam_saveArrayIndex].clExPublishedBy, 
                updateType_ajax: 1
            }, 
            // contentType: false, 
            // processData: false, 
            // async: false, 
            cache: false, 
            success: function(data) {
                // alert(data);
                alert('SUCCESS: Exam published.');
            }, 
            error: function(data) {
                // alert(data);
                alert('ERROR: An error occured while saving the Exam.');
            }
        });
    });
}

function modifyExamList(in_buttonName, in_examID, in_elementRowID) {
    if((in_buttonName.localeCompare("modify_add_button")) == 0) { // Redirect User to Exam Viewer with empty values
        location.href = "../webadmin/admin_exameditor.php";
    }
    else if((in_buttonName.localeCompare("modify_edit_button") == 0)) { // Redirect User to Exam Viewer to edit Existing Exam on the List
        location.href = "../webadmin/admin_exameditor.php?exam_id=" + in_examID;
    }
    else if((in_buttonName.localeCompare("modify_delete_button") == 0)) { // Delete an Existing Exam on the List
        deleteExamData(in_elementRowID);
    }
    else if((in_buttonName.localeCompare("modify_publish_button")) == 0) { // Publish Exam
        var exam_saveArrayIndex = Number((in_elementRowID).substring((in_elementRowID).lastIndexOf("-")+1)) - 1;

        setPublishStatus(true,exam_saveArrayIndex);
    }
}

// ============================CALLS============================
addEmptyText("i-div--examlist-empty");
displayExamList("i-div--examlist-display", tbExam_data_length);







