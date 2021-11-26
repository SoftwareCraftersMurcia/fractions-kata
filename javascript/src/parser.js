const parse = (input) => {
  const isValid = !!input.trim().length > 0;
  return {
      valid: isValid,
      ...(isValid && {result: 0.5})
  };
};

module.exports = { parse };
