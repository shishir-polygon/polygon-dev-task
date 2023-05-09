while true; do
    echo "Enter the source file path:"
    read source_file

    if [ -f "$source_file" ]; then
        break
    else
        echo "Invalid file path. Please try again."
    fi
done

echo "Enter the destination file path:"
read destination_file

cp "$source_file" "$destination_file"

echo "File copied from $source_file to $destination_file"

echo "Opening $destination_file in text editor..."

nano "$destination_file"

echo "Changes saved to $destination_file"