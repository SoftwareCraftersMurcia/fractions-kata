const parse = (input) => {
  const isValid = !!input.trim().length > 0;
  if (!isValid) return { valid: false };

  const regex = /\{([-\d]+)\/([-\d]+)\}/g;
  const groups = regex.exec(input);
  return {
    valid: true,
    result: parseInt(groups[1]) / parseInt(groups[2]),
  };
};

module.exports = { parse };
