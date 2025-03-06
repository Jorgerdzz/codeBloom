export function isValidName(name) {
  return name.length > 1 && !/[0-9]/.test(name);
}

export function isValidLastName(lastName) {
  return lastName.length > 1 && !/[0-9]/.test(lastName);;
}

export function isValidEmail(email) {
  const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return regex.test(email);
}

export function isValidPassword(password) {
  return password.length >= 8;
}

export function isValidMessage(message) {
  return message.length > 5;
}
