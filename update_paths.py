import os
import xml.etree.ElementTree as ET

# Function to replace the old file path with the new one
def update_file_path(xml_file, old_prefix, new_prefix):
    try:
        # Parse the XML file
        tree = ET.parse(xml_file)
        root = tree.getroot()

        # Iterate over all elements in the XML and update paths
        for elem in root.iter():
            if elem.text and old_prefix in elem.text:
                # Replace the old path prefix with the new one
                elem.text = elem.text.replace(old_prefix, new_prefix)

        # Save the updated XML back to file
        tree.write('updated_' + xml_file)

    except Exception as e:
        print(f"An error occurred: {e}")

# Input and output file names
input_xml = 'C:\ketan\Internship\Healet\healet-html\about.html'  # Replace with your XML file name

# The old and new prefixes
old_path_prefix = "file:///C:/Users/ketan/"
new_path_prefix = "file:///C:/ketan/"

# Call the function to update the paths
update_file_path(input_xml, old_path_prefix, new_path_prefix)
