export function dynamicText(array, key, defaultValue = null) {
    if (array[key] == null || array[key] == "") {
        return defaultValue;
    }
    return array[key] ?? defaultValue;
}
